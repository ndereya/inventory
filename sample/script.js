document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("contactForm");
  const offlineIndicator = document.getElementById("offline-indicator");

  // Check if the browser supports IndexedDB
  if ("indexedDB" in window) {
    initIndexedDB();
  } else {
    // Use localStorage as a fallback
    initLocalStorage();
  }

  form.addEventListener("submit", function(event) {
    event.preventDefault();

    const name1 = document.getElementById("name1").value;
    const email1 = document.getElementById("email1").value;
    const name2 = document.getElementById("name2").value;
    const email2 = document.getElementById("email2").value;

    // Check if the contacts already exist in the server
    checkExistingContacts(name1, email1, name2, email2)
      .then(() => {
        // Save the contacts to the database and local storage/IndexedDB
        saveContacts(name1, email1, name2, email2);
      })
      .catch((error) => {
        console.error("Error:", error);
        showOfflineIndicator();
      });

    // Clear the form
    form.reset();
  });

  function saveContacts(name1, email1, name2, email2) {
    // Save to the database
    saveToDatabase(name1, email1, name2, email2);

    // Save to local storage or IndexedDB
    saveToLocalStorage(name1, email1, name2, email2);
  }

  function saveToDatabase(name1, email1, name2, email2) {
    // Use AJAX or Fetch API to send the data to the PHP script
    fetch("save_contact.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `name1=${name1}&email1=${email1}&name2=${name2}&email2=${email2}`,
    })
      .then((response) => response.text())
      .then((data) => {
        console.log(data);
      })
      .catch((error) => {
        console.error("Error:", error);
        showOfflineIndicator();
      });
  }

  function saveToLocalStorage(name1, email1, name2, email2) {
    const contacts = [
      { name: name1, email: email1 },
      { name: name2, email: email2 },
    ];

    // Save the contacts to local storage or IndexedDB
    if ("indexedDB" in window) {
      saveToIndexedDB(contacts);
    } else {
      saveToLocalStorage(contacts);
    }
  }

  function initIndexedDB() {
    // Initialize IndexedDB and create the contacts store
    const request = window.indexedDB.open("contactsDB", 1);

    request.onupgradeneeded = function(event) {
      const db = event.target.result;
      const store = db.createObjectStore("contacts", { keyPath: "id", autoIncrement: true });
    };

    request.onsuccess = function(event) {
      console.log("IndexedDB initialized");
    };
  }

  function saveToIndexedDB(contacts) {
    const request = window.indexedDB.open("contactsDB", 1);

    request.onsuccess = function(event) {
      const db = event.target.result;
      const transaction = db.transaction(["contacts"], "readwrite");
      const store = transaction.objectStore("contacts");

      contacts.forEach((contact) => {
        store.add(contact);
      });

      console.log("Contacts saved to IndexedDB");
    };
  }

  function initLocalStorage() {
    console.log("IndexedDB not supported, using localStorage");
  }

  function saveToLocalStorage(contacts) {
    localStorage.setItem("contacts", JSON.stringify(contacts));
    console.log("Contacts saved to localStorage");
  }

  function showOfflineIndicator() {
    offlineIndicator.style.display = "block";
  }

  function checkExistingContacts(name1, email1, name2, email2) {
    return new Promise((resolve, reject) => {
      // Use AJAX or Fetch API to check if the contacts already exist in the server
      fetch("check_contacts.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `name1=${name1}&email1=${email1}&name2=${name2}&email2=${email2}`,
      })
        .then((response) => response.text())
        .then((data) => {
          if (data === "true") {
            reject(new Error("Contacts already exist in the server"));
          } else {
            resolve();
          }
        })
        .catch((error) => {
          reject(error);
        });
    });
  }
});
// const myPromise = new Promise((resolve, reject) => {
//     let condition = true; // You can change this to false to see the reject case.
  
//     if (condition) {
//         console.log("hi")
//       resolve("The operation was successful!");
//     } else {
//       reject("The operation failed.");
//     }
//   });
function fetchData() {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        const success = false; // Simulate success or failure.
  
        if (success) {
          resolve({ name: "John", age: 30 });
        } else {
          reject("Error fetching data.");
        }
      }, 2000);
    });
  }
  
  fetchData()
    .then((data) => {
      console.log("Data received:", data);
    })
    .catch((error) => {
      console.log("Error:", error);
    })
    .finally(() => {
      console.log("Fetch operation completed.");
    });
  
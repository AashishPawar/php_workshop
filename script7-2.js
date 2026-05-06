async function getUser(id) {
  try {
    const res = await fetch(`http://localhost/ashish/mydata7-2.php/user/${id}`);
    const data = await res.json();

    console.log("User Data:", data);
  } catch (error) {
    console.log("Error:", error);
  }
}

// Example calls
getUser(1);
getUser(2);
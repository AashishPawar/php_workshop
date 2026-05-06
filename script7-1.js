async function getStudents() {
  try {
    const response = await fetch("http://localhost/ashish/mydata7-1.php");

    const data = await response.json(); // convert to JSON

    console.log("Student Data:", data);
  } catch (error) {
    console.log("Error:", error);
  }
}

// call function
getStudents();
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<style>
  /* CSS styles */
  /* Resetting default margin and padding */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    color: #333;
    line-height: 1.6;
  }

  /* Header styles */
  .header {
    background-color: #333;
    color: #fff;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 28px;
    font-weight: bold;
    text-transform: uppercase;
  }

  .nav-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
  }

  .nav-link {
    margin-right: 20px;
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
  }

  .nav-link:hover {
    background-color: #555;
  }

  /* Container styles */
  .container {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  h2 {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  p{
    font-size: 16px;
    margin-bottom: 15px;
  }

  /* Apply some styles to make the content more visually appealing */
  .container p:first-child {
    font-style: italic;
  }

  .container p:last-child {
    font-weight: bold;
  }

  .container p:nth-child(3n) {
    color: #007bff;
  }

  .container p:nth-child(odd) {
    background-color: #f2f2f2;
  }

  /* Dashboard styles */
  .dashboard {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 20px;
  }

  .dashboard h3 {
    font-size: 20px;
    margin-bottom: 15px;
  }

  .dashboard p {
    font-size: 16px;
    margin-bottom: 10px;
  }

  /* Add hover effect */
  .dashboard:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    cursor: pointer;
  }
</style>
</head>
<body>
  <header class="header">
    <div class="logo">RGUKT HOSTEl COMPLAINT SYSTEM</div>
    <nav>
      <ul class="nav-links">
        <li><a href="#" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Settings</a></li>
        <li><a href="login.html" class="nav-link">Login</a></li>
        <li><a href="signup.html" class="nav-link">Signup</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <h2>RGUKT Hostel Complaint System</h2>
    <p>At Rajiv Gandhi University of Knowledge Technologies (RGUKT), hostel facilities are provided to its students to ensure a comfortable living and learning environment. However, the current complaint system for hostel-related issues relies heavily on manual processes. Students are required to visit caretakers physically to lodge complaints regarding various hostel-related issues such as maintenance, cleanliness, or any other concerns.</p>
    <p>This traditional approach not only consumes valuable time for both students and caretakers but also lacks efficiency in handling and tracking complaints promptly. Additionally, it can be challenging for students to keep track of the status of their complaints and for caretakers to manage and prioritize them effectively.</p>
    <p>To address these challenges and improve the overall experience for students and caretakers alike, RGUKT is considering implementing a digital complaint management system. This system would allow students to easily lodge complaints through an online platform, providing details such as the nature of the issue, location, and urgency level.</p>
    <p>Once a complaint is submitted, caretakers would receive instant notifications and be able to prioritize and assign tasks accordingly. The system would also enable caretakers to track the status of complaints, update progress, and communicate with students seamlessly.</p>
    <p>By digitizing the complaint management process, RGUKT aims to streamline operations, improve efficiency, and enhance the overall hostel experience for its students.</p>
  </div>

  <div class="dashboard">
    <h3>Recent Complaints</h3>
    <p>Complaint 1: Water leakage in Room 202</p>
    <p>Complaint 2: Broken furniture in Common Room</p>
    <p>Complaint 3: Unclean washrooms on 3rd floor</p>
  </div>
</body>
</html>
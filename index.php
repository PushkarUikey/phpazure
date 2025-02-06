<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .section h2 {
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Portal</h1>

        <!-- Course Offerings Section -->
        <div class="section">
            <h2>Course Offerings</h2>
            <?php
            $courses = [
                ['Course ID' => 'CS101', 'Course Name' => 'Introduction to Programming', 'Instructor' => 'Dr. Smith'],
                ['Course ID' => 'CS102', 'Course Name' => 'Data Structures', 'Instructor' => 'Prof. Lee'],
                ['Course ID' => 'CS103', 'Course Name' => 'Database Systems', 'Instructor' => 'Dr. Johnson']
            ];
            ?>
            <table>
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                </tr>
                <?php foreach ($courses as $course): ?>
                    <tr>
                        <td><?php echo $course['Course ID']; ?></td>
                        <td><?php echo $course['Course Name']; ?></td>
                        <td><?php echo $course['Instructor']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <!-- Attendance Section -->
        <div class="section">
            <h2>Attendance</h2>
            <?php
            $attendance = [
                ['Date' => '2025-02-01', 'Course ID' => 'CS101', 'Status' => 'Present'],
                ['Date' => '2025-02-02', 'Course ID' => 'CS102', 'Status' => 'Absent'],
                ['Date' => '2025-02-03', 'Course ID' => 'CS103', 'Status' => 'Present']
            ];
            ?>
            <table>
                <tr>
                    <th>Date</th>
                    <th>Course ID</th>
                    <th>Status</th>
                </tr>
                <?php foreach ($attendance as $record): ?>
                    <tr>
                        <td><?php echo $record['Date']; ?></td>
                        <td><?php echo $record['Course ID']; ?></td>
                        <td><?php echo $record['Status']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <!-- Schedule Section -->
        <div class="section">
            <h2>Schedules</h2>
            <?php
            $schedule = [
                ['Day' => 'Monday', 'Course' => 'CS101', 'Time' => '10:00 AM - 11:00 AM'],
                ['Day' => 'Tuesday', 'Course' => 'CS102', 'Time' => '11:00 AM - 12:00 PM'],
                ['Day' => 'Wednesday', 'Course' => 'CS103', 'Time' => '2:00 PM - 3:00 PM']
            ];
            ?>
            <table>
                <tr>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Time</th>
                </tr>
                <?php foreach ($schedule as $slot): ?>
                    <tr>
                        <td><?php echo $slot['Day']; ?></td>
                        <td><?php echo $slot['Course']; ?></td>
                        <td><?php echo $slot['Time']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>

<?php

// Check if Composer vendor autoloader exists; fall back to custom autoloader if not
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
} else {
    spl_autoload_register(function (string $class): void {
        $prefix = 'University\\';
        $baseDir = __DIR__ . '/src/';
        $len = strlen($prefix);

        if (strncmp($prefix, $class, $len) !== 0) {
            return;
        }

        $relativeClass = substr($class, $len);
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

        if (file_exists($file)) {
            require_once $file;
        }
    });
}

use University\School;
use University\Teacher;
use University\Student;
use University\Discipline;
use University\ClassSchedule;

// Instantiate models
$school = new School('University of San Jose - Recoletos', 'Cebu City, Philippines 6000');

$teacher = new Teacher('T001', 'MR.Rodenrick Bandalan', 'School of Computer Studies');

$discipline = new Discipline('SpecElec2', 'OWeb Development 2', 3);

$schedule = new ClassSchedule('MWF', '02:30 AM - 03:30 AM', '1001');

$student1 = new Student('2024-0001', 'Pasco Angel Mae', 'BS Information Technology');
$student2 = new Student('2024-0002', 'Bonghanoy Maria Jelian', 'BS Information Technology');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($school->getName()) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; color: #333; }
        .card { background: #fff; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #004085; }
        h2 { color: #0056b3; border-bottom: 2px solid #e9ecef; padding-bottom: 5px; }
        ul { list-style-type: square; }
    </style>
</head>
<body>

    <div class="card">
        <h1><?= htmlspecialchars($school->getName()) ?></h1>
        <p><strong>Location:</strong> <?= htmlspecialchars($school->getLocation()) ?></p>
    </div>

    <div class="card">
        <h2>Course & Instructor</h2>
        <p><strong>Subject:</strong> <?= htmlspecialchars($discipline->getCode()) ?> - <?= htmlspecialchars($discipline->getName()) ?> (<?= $discipline->getUnits() ?> Units)</p>
        <p><strong>Instructor:</strong> <?= htmlspecialchars($teacher->getName()) ?> (<?= htmlspecialchars($teacher->getDepartment()) ?>)</p>
        <p><strong>Schedule:</strong> <?= htmlspecialchars($schedule->getDays()) ?> @ <?= htmlspecialchars($schedule->getTime()) ?> (Room: <?= htmlspecialchars($schedule->getRoom()) ?>)</p>
    </div>

    <div class="card">
        <h2>Enrolled Students</h2>
        <ul>
            <li><?= htmlspecialchars($student1->getStudentId()) ?> - <?= htmlspecialchars($student1->getName()) ?> (<?= htmlspecialchars($student1->getCourse()) ?>)</li>
            <li><?= htmlspecialchars($student2->getStudentId()) ?> - <?= htmlspecialchars($student2->getName()) ?> (<?= htmlspecialchars($student2->getCourse()) ?>)</li>
        </ul>
    </div>

</body>
</html>
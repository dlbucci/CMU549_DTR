<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Distributed Tabletop Robots (18-549 Team 11)</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style.css"/>
  </head>
  <body>
    <h1 class="project-title">Distributed Tabletop Robots</h1>
    
    <h4 class="team-name">
      18-549 Team 11:
      <ul class="project-authors">
        <li>Ibukun Adeleye (iia)</li>
        <li>Dale Best (dbest)</li>
        <li>Daniel Bucci (dlbucci)</li>
        <li>Sriharsha Vasadi (svasadi)</li>
      </ul>
    </h3>

    <ul class="nav">
      <li><a href="concept.php">Concept</a></li>
      <li><a href="competitive.php">Competitive Analysis</a></li>
      <li><a href="motivation.php">Motivation</a></li>
      <li><a href="requirements.php">Requirements</a></li>
      <li><a href="components.php">Components</a></li>
      <li><a href="architecture.php">Architecture</a></li>
      <li><a href="useCases.php">Use Cases</a></li>
      <li><a href="interactions.php">Interaction</a></li>
    </ul>

    <div id="mainContent" class="content">
      <h2 class="page-title"><?= $title ?></h1>
      <? include $content ?>
    </div>

    <div id="footer" class="content">Created by 18-549 Team 11 for the Spring 2015 Semester.</div>
  </body>
</html>

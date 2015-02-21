<h3>Explicit Requirements</h3>

<ul>
  <li> 
    Robots:
    <ul>
      <li>Detect obstacles and stop moving further.</li>
      <li>Detect cliffs using IR sensors and stop navigating in the current direction.</li>
    </ul>
  </li>

  <li> 
    Central Hub &amp; Camera:
    <ul>
      <li>Locate the robots based on the camera's video.</li>
      <li>Find the orientation of the robots.</li>
      <li>Designate movement tasks for the robots and keep track of places that have already been covered.</li>
      <li>Gather the robots on completion of designated tasks and return them to a home base.</li>
    </ul>
  </li>
</ul>

<h3>Implicit Requirements</h3>

<ul>
  <li>Robots should have a two dimensional field of motion so that they can navigate around obstacles.</li>
  <li>There should be constant and meaningful communication between the robots and the central hub at all times.</li>
  <li>Robots need speed and direction control, as well as path scheduling that is done by the central hub.</li>
</ul>

<h3>Stemming Requirements</h3>

<ul>
  <li>One potential improvement to the system would be the use of multiple cameras to increase the area that one robot can cover.</li>
  <li>In the case where a robot disappears from the field of view of one camera, while appearing in the view of another, the robot and process should continue to function uninterrupted.</li>
</ul>

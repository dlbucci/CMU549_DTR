<ul class="competitors">
  <li>
    <h3>Explicit Requirements</h3>

    <ul class="competitors swap">
      <li> 
        <h4>Robots:</h4>
        <ul class="competitors">
          <li>Detect obstacles and stop moving further.</li>
          <li>Detect cliffs using IR sensors and stop navigating in the current direction.</li>
        </ul>
      </li>

      <li> 
        <h4>Central Hub &amp; Camera:</h4>
        <ul class="competitors swap">
          <li>Locate the robots based on the camera's video.</li>
          <li>Find the orientation of the robots.</li>
          <li>Designate movement tasks for the robots and keep track of places that have already been covered.</li>
          <li>Gather the robots on completion of designated tasks and return them to a home base.</li>
        </ul>
      </li>
    </ul>
  </li>

  <li>
    <h3>Implicit Requirements</h3>

    <ul class="competitors">
      <li>Robots should have a two dimensional field of motion so that they can navigate around obstacles.</li>

      <li>There should be constant and meaningful communication between the robots and the central hub at all times.</li>

      <li>Robots need speed and direction control, as well as path scheduling that is done by the central hub.</li>
    </ul>
  </li>

  <li>
    <h3>Stemming Requirements</h3>

    <ul class="competitors swap">
      <li>One potential improvement to the system would be the use of multiple cameras to increase the area that one robot can cover.</li>

      <li>In the case where a robot disappears from the field of view of one camera, while appearing in the view of another, the robot and process should continue to function uninterrupted.</li>
    </ul>
  </li>
</ul>

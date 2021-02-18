<?function number($bus_stops) {
  $in_bus = 0;
  
  foreach( $bus_stops as $bus_stop )
  {
    $in_bus +=  $bus_stop[0] - $bus_stop[1];
  } 
  
  return $in_bus;
  
}
?>
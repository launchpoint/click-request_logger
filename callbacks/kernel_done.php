<?

$this_request->rendered_output = $rendered_page;
$this_request->execution_duration = ($end-$start)*1000;
$this_request->save();

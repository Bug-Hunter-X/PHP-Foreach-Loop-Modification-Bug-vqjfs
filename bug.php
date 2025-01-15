function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
}
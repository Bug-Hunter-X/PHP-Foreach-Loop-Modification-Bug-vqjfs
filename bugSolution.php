function foo(array $arr) {
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'a') {
      unset($arr[$i]);
    }
  }
} 
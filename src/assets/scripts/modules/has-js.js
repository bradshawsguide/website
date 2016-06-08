export default function() {
  // Constants
  const docEl = document.documentElement;

  // Replace class
  docEl.className = docEl.className.replace('no-js', 'has-js');
}

///navbar

function toggleMenu() {
  var navbarMobile = $("#navbarMobile");
  if (navbarMobile.css("display") == 'none') {
      navbarMobile.css("display", "block");
  } else {
      navbarMobile.css("display", "none");
  }
}

///form
function validateForm() {
  const numMembers = 3;
  for (let i = 1; i <= numMembers; i++) {
      const tel = document.getElementById(`tel${i}`).value;
      if (!tel.startsWith('+66')) {
          alert(`เบอร์โทรสำหรับสมาชิกคนที่ ${i} ต้องเริ่มต้นด้วย +66`);
          return false;
      }
  }
  return true;
}


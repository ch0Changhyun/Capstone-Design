const sendit = () => {
	// Input들을 각각 변수에 대입
    const nickname = document.regiform.nickname;
    const useremail = document.regiform.useremail;
    const userphone = document.regiform.userphone;
    const username = document.regiform.username;
    const birth = document.regiform.birth;
    const sex = document.regiform.sex;
  	const userpw = document.regiform.userpw;
    const userpw_ch = document.regiform.userpw_ch;

    // nickname값이 비어있으면 실행.
    if(nickname.value == '') {
        alert('닉네임를 입력해주세요.');
        nickname.focus();
        return false;
    }
    // nickname값이 3자 이상 12자 이하를 벗어나면 실행.
    if(nickname.value.length < 3 || nickname.value.length > 12){
        alert("닉네임는 3자 이상 12자 이하로 입력해주세요.");
        nickname.focus();
        return false;
    }
    // useremail값이 비어있으면 알림창을 띄우고 input에 포커스를 맞춘 뒤 False를 리턴한다.
    if(useremail.value == '') {
        alert('이메일을 입력해주세요.');
        useremail.focus();
        return false;
    }
    // 이메일 형식 정규식
    //
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
    // useremail값이 정규식에 부합한지 체크
    if(!expEmailText.test(useremail.value)) {
        alert('Please check the format your E-mail.');
        useremail.focus();
        return false;
    }
    // userphone값이 비어있으면 실행.
    if(userphone.value == '') {
        alert('핸드폰 번호를 입력해주세요.');
        userphone.focus();
        return false;
    }
    // 핸드폰 번호 형식 정규식
     // userphone값이 정규식에 부합한지 체크
    const expHpText = /^\d{3}\d{3,4}\d{4}$/;
    if(!expHpText.test(userphone.value)) {
        alert('핸드폰 번호 형식이 맞지않습니다. 형식에 맞게 입력해주세요.');
        userphone.focus()
        return false;
    }
    // username값이 비어있으면 실행.
    if(username.value == '') {
        alert('이름을 입력해주세요.');
        username.focus();
        return false;
    }
    // born값이 비어있으면 실행.
    if(birth.value == '') {
        alert('생년월일을 입력해주세요.');
        birth.focus();
        return false;
    }
    // 생년월일 형식 정규식
    const bornText = /^\d{8}$/;
    // born값이 정규식에 부합한지 체크
    if(!bornText.test(birth.value)) {
        alert('생년월일 형식이 맞지않습니다. 형식에 맞게 입력해주세요.');
        birth.focus()
        return false;
    }
    // sex값이 비어있으면 실행.
    if(sex.value == '') {
        alert('성별을 입력해주세요.');
        sex.focus();
        return false;
    }
    if(sex.value == 0) {
    }else if (sex.value == 1) {
    }else {
      alert('성별 형식이 맞지않습니다. 형식에 맞게 입력해주세요.');
      sex.focus();
      return false;
    }
    // userpw값이 비어있으면 실행.
    if(userpw.value == '') {
        alert('비밀번호를 입력해주세요.');
        userpw.focus();
        return false;
    }
    // userpw_ch값이 비어있으면 실행.
    if(userpw_ch.value == '') {
        alert('비밀번호 확인을 입력해주세요.');
        userpw_ch.focus();
        return false;
    }
    // userpw값이 6자 이상 20자 이하를 벗어나면 실행.
    if(userpw.value.length < 6 || userpw.value.length > 20){
        alert("비밀번호는 6자 이상 20자 이하로 입력해주세요.");
        userpw.focus();
        return false;
    }
	// userpw값과 userpw_ch값이 다르면 실행.
    if(userpw.value != userpw_ch.value) {
        alert('비밀번호가 다릅니다. 다시 입력해주세요.');
        userpw_ch.focus();
        return false;
    }
	// 유효성 검사 정상 통과 시 true 리턴 후 form 제출.
    return true;
}

const sendit2 = () => {
	// Input들을 각각 변수에 대입
    const nickname = document.regiform.nickname;
    const useremail = document.regiform.useremail;
    const userphone = document.regiform.userphone;
    const username = document.regiform.username;
    const birth = document.regiform.birth;
    const sex = document.regiform.sex;
  	const userpw = document.regiform.userpw;
    const userpw_ch = document.regiform.userpw_ch;

    // nickname값이 3자 이상 12자 이하를 벗어나면 실행.
    if(nickname.value.length < 3 || nickname.value.length > 12){
        alert("닉네임는 3자 이상 12자 이하로 입력해주세요.");
        nickname.focus();
        return false;
    }
    // 이메일 형식 정규식
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
    // useremail값이 정규식에 부합한지 체크
    if(!expEmailText.test(useremail.value)) {
        alert('Please check the format your E-mail.');
        useremail.focus();
        return false;
    }
    // 핸드폰 번호 형식 정규식
     // userphone값이 정규식에 부합한지 체크
    const expHpText = /^\d{3}\d{3,4}\d{4}$/;
    if(!expHpText.test(userphone.value)) {
        alert('핸드폰 번호 형식이 맞지않습니다. 형식에 맞게 입력해주세요.');
        userphone.focus()
        return false;
    }
    // 생년월일 형식 정규식
    const bornText = /^\d{8}$/;
    // born값이 정규식에 부합한지 체크
    if(!bornText.test(born.value)) {
        alert('생년월일 형식이 맞지않습니다. 형식에 맞게 입력해주세요.');
        born.focus()
        return false;
    }
    if(sex.value == 0) {
    }else if (sex.value == 1) {
    }else {
      alert('성별 형식이 맞지않습니다. 형식에 맞게 입력해주세요.');
      sex.focus();
      return false;
    }
    // userpw값이 6자 이상 20자 이하를 벗어나면 실행.
    if(userpw.value.length < 6 || userpw.value.length > 20){
        alert("비밀번호는 6자 이상 20자 이하로 입력해주세요.");
        userpw.focus();
        return false;
    }
	// 유효성 검사 정상 통과 시 true 리턴 후 form 제출.
    return true;
}
const sendit3 = () => {

  const nickname = document.regiform.nickname;
  const useremail = document.regiform.useremail;
  const userpw = document.regiform.userpw;

  if(nickname.value == '') {
      alert('닉네임를 입력해주세요.');
      nickname.focus();
      return false;
  }
  if(useremail.value == '') {
      alert('이메일를 입력해주세요.');
      nickname.focus();
      return false;
  }
  if(userpw.value == '') {
      alert('비밀번호를 입력해주세요.');
      nickname.focus();
      return false;
  }


}

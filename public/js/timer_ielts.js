const time = 40;
let totalTime = time * 60;
let timer;

function setTime() {
    totalTime--;

    let minutes = Math.floor(totalTime / 60);
    let seconds = totalTime % 60;

    $('#time').html(`<span class="text-danger">${minutes < 10 ? '0' + minutes : minutes}</span> minutes <span class="text-danger">${seconds < 10 ? '0' + seconds : seconds}</span> seconds`);

    if(minutes == 0 && seconds == 0) {
        seconds = '00';
        stopTime();
        Swal({
            type: 'warning',
            title: 'Your time is up.',
            allowOutsideClick: false
        }).then((result) => {
            if(result) {
                $('#form-exam').submit();
            }
        })
    }
}

function startTime() {
    timer = setInterval(setTime, 1000);
}

function stopTime() {
    clearInterval(timer);
}

window.onload = () => {
    startTime();
}
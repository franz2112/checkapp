<template>
    <div class="overlay">
        <div class="loader-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
</template>
<script>
export default {};
</script>
<style>
.dp__range_end,
.dp__range_start,
.dp__active_date {
    background: #35bf53;
}
.overlay {
    background-color: rgba(1, 1, 1, 0.8);
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 4000;
}

.loader-wrapper {
    z-index: 4100;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -40%);
}
.spinner {
    margin: 100px auto 0;
    width: 70px;
    text-align: center;
}

.spinner > div {
    width: 18px;
    height: 18px;
    background-color: #35bf53;

    border-radius: 100%;
    display: inline-block;
    -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s;
}

.spinner .bounce2 {
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
    0%,
    80%,
    100% {
        -webkit-transform: scale(0);
    }
    40% {
        -webkit-transform: scale(1);
    }
}

@keyframes sk-bouncedelay {
    0%,
    80%,
    100% {
        -webkit-transform: scale(0);
        transform: scale(0);
    }
    40% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}
</style>

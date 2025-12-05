<div>
    <p id="proof-js-is-running"></p>
    <p>The text below should be Red or Blue based on the JS</p>
    <div id="inner-friday">
        @if (now()->dayName === 'Friday')
            Inner Friday
        @else
            Inner Not Friday
        @endif
    </div>

    <script type="text/javascript">
        document.getElementById('proof-js-is-running').innerHTML = 'JS has executed';
        @if (now()->dayName === 'Friday')
        document.getElementById('inner-friday').style.color = 'red';
        @else
        document.getElementById('inner-friday').style.color = 'blue';
        @endif
    </script>
</div>

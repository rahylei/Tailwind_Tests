
<label for="checked-toggle" class="inline-flex relative items-center cursor-pointer">
    <input type="checkbox" value="" id="checked-toggle" class="sr-only peer" checked="no" onclick="getStat()">
    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Checked toggle</span>
</label>

<div>
    <audio id="sound" src="{{asset('music/moonKnigth.mp3')}}"></audio>    
</div>

<script type="text/javascript">
    var check = document.getElementById('checked-toggle');
    var music = document.getElementById('sound');

    function getStat(){
        console.log('aver aver aver...');                
        console.log(check.checked);
        if(check.checked){
            music.play();
        } else {
            music.pause();
        }
    }
</script>

{{--
    other wais to made a music reproducer...
    <audio controls>
        <source src="{{asset('music/moonKnigth.mp3')}}" type="audio/mpeg"> 
    </audio>

    <div>
        <button type="button" onclick="getStat()">status</button>
    </div>
--}}

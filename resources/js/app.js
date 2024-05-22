import './bootstrap';
import 'flowbite';
import { initFlowbite } from 'flowbite';
import Datepicker from 'flowbite-datepicker/Datepicker';



document.addEventListener('livewire:navigated', () => {
    initFlowbite();
    $("#e1").select2();


    const dateRangePickerEl = document.getElementById('bod');
    new Datepicker(dateRangePickerEl, {
        // options
    });
})



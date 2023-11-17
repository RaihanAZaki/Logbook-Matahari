import './bootstrap';
import 'flowbite';

import { Datepicker, Input } from "tw-elements";

const myInput = new Input(document.getElementById("myDatepicker"));
const options = {
  format: "dd-mm-yyyy",
};
const myDatepicker = new Datepicker(
  document.getElementById("myDatepicker"),
  options
);
import { Datepicker, Input, initTE } from "tw-elements";
initTE({ Datepicker, Input });

$.ajaxSetup({
  headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      "X-Requested-With": "XMLHttpRequest"
  }
});
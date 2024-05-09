
<style type="text/tailwindcss">
.input-text{
    @apply bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ;
}
.btn{
    @apply w-40 py-2 rounded-lg cursor-pointer;
}
.txtarea{
    @apply block p-2.5 w-full text-xs md:text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ;
}
.select-wrapper {
    display: none;
}
.custom-div:focus-within .select-wrapper {
    display: block;
}
.question{
    @apply basis-[50%] border-b border-orange-400 bg-gray-50 p-2 transition-transform focus:border-b-2 focus:outline-none;
}
.default{
    @apply text-black border-none bg-none basis-[50%]  transition-transform;
}
.grid-form{
    @apply w-full focus:outline-none focus:border-b focus:bg-gray-50 relative;
}
.remove-option{
    @apply absolute right-0 bottom-2 capitalize text-gray-700 cursor-pointer mx-2 hover:opacity-80 w-3 h-3;
}
.div-editable{
    @apply focus:outline-none focus:border-b-2 focus:border-black 
}
.edit-input.dark-input {
    background-color: gray; /* Dark background color */
    color: white; /* Light text color */
}

/* -------------- ADMIN STYLES -------------- */

/* dashboard cards */
.card{
    @apply h-24 sm:h-32 shadow-md rounded-lg w-[20%] min-w-[150px] sm:min-w-[200px] sm:max-w-[320px] border flex justify-between px-2 md:pr-5 bg-gray-50
}
.card-img-cont{
    @apply h-full basis-[40%] p-2 grid place-items-center
}
.card-text-cont{
    @apply flex flex-col justify-center items-end
}
.card-text-number{
    @apply text-xl md:text-6xl text-orange-400 basis-[70%] grid place-items-center
}
.card-text-subheader{
    @apply text-base lg:text-xl basis-[30%] pb-3
}

/* ADMIN BUTTON STYLE */
.btn-bordered{
    @apply text-gray-700 bg-transparent border-2 border-gray-700 px-24 py-2 tracking-widest rounded-xl text-xs md:text-lg
}
.active{
    @apply text-white bg-gray-700 border-2 border-gray-700 px-24 py-2 tracking-widest rounded-xl text-xs md:text-lg
}
</style>
<template>
    <div class="flex flex-col items-center justify-center bg-white p4">
        <p class="text-xl text-blue-800 text-center mt-5 mb-5">Useful Information</p>
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div class="text-blue-800">
                <a class="text-blue-800" href="/documents/privacy policy for WHH.docx" title="Privacy Policy for WHH">Privacy Policy for WHH</a>
            </div>
            <div class="text-blue-800">
                <a class="text-blue-800" title="WHH Terms of Service" href="/documents/Waterside Home Help terms of service for client.docx">WHH Terms of Service</a>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "Documents",
}
</script>

<style scoped>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>


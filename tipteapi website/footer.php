<footer class="py-2 mt-auto">
    <div class="container-fluid">
        <div class="text-center text-white small">
            <div class="text-muted">Copyright &copy; Tip Teapi 2020&emsp;|&emsp;<a class="btn btn-link" onclick="showTerms();">All Rights Reserved</a></div>
            <div>
                <!-- <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a> -->
            </div>
        </div>
    </div>
</footer>
<script>
    function showTerms() {
        $(".termsModal").modal("toggle");
        $(document).on("hidden.bs.modal", function(e) {
            $(e.target).removeData();
            $(this).modal("dispose");
        });
    }
</script>
<div class="modal fade termsModal" id="termsModal" data-backdrop="static" data-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Terms And Conditions</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <h5>
                        This is for the safety of users and viewers. Details of users such as photos and personal information shall be secured and not accessible to anyone else. While uploading content one should not instinct violence against any creature, minor or any living beings. Such videos will not be promoted.<br>Section 67A provides punishment for publishing or transmitting obsence  digital content containing sexual explicit acts. As per 67A of I.T. Act punishment on first conviction is imprisonment of a term which may extend upto 10 lakhs.
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
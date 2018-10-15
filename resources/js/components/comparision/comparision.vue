<template>
    <div class="modal fade" id="comparision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="icon-flow-cross"></i>
                        <span class="text-header">Adverts Compare List</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="close-sign" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "comparision",
        mounted() {
            $(document).ready(function () {
                $('#comparision').modal('show');
            });
        }
    }
</script>

<style lang="scss" scoped>

    .modal-content {
        border-radius: 1px;
        font-family: "Roboto", sans-serif;

        .text-header {
            font-size: 26px;
            font-weight: 700;
        }

        .icon-flow-cross {
            font-size: 24px;
            padding-right: 5px;
        }

        .close {
            opacity: 0.90;
            padding: .9rem 22px .9rem .9rem;

            .close-sign {
                height: 100%;
                display: block;
                color: black;
                font-size: 42px;
                font-weight: 700;
            }
        }

        .close:active, .close:focus {
            outline: none;
        }
    }
</style>
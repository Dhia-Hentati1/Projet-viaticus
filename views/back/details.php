
<div class="modal fade" id="exampleModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5> <?PHP echo $user['cin']; ?> </h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>

                                                    NOM    :    <?PHP echo $user['nom']; ?> <br>
                                                    PRENOM :    <?PHP echo $user['prenom']; ?> <br>
                                                    EMAIL :    <?PHP echo $user['email']; ?><br>
                                                    LOGIN :    <?PHP echo $user['login']; ?><br>
                                                    VILLE :    <?PHP echo $user['ville']; ?><br>
                                                    TEL   : <?PHP echo $user['tel']; ?><br>
                                                    ROLE  : <?PHP echo $user['role']; ?><br>


                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
</div>

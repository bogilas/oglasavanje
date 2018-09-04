<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white top">
    <form class="form-horizontal" method="POST">
    <div class="reserve">
        <!-- EXP -->
        <div class="plane specCase">
            <div class="cockpit">
                <h1>Izaberite sedista</h1>
                <?php if (isset($DATA['message'])):?>
        <h2><?php echo htmlspecialchars($DATA['message']); ?></h2>   
    <?php endif; ?>
            </div>
            <div class="exit exit--front fuselage"></div>
            <ol class="cabin fuselage">
                <li class="row.rowSpec row-1">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="1" name="1" <?php if ($DATA['1']) echo 'disabled' ?>/>
                            <label for="1" class="seatRB">1A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="2" name="2"<?php if ($DATA['2']) echo 'disabled' ?>/>
                            <label for="2" class="seatRB">1B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="3" name="3"<?php if ($DATA['3']) echo 'disabled' ?>/>
                            <label for="3" class="seatRB">1C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="4" name="4"<?php if ($DATA['4']) echo 'disabled' ?>/>
                            <label for="4" class="seatRB">1D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="5" name="5"<?php if ($DATA['5']) echo 'disabled' ?>/>
                            <label for="5" class="seatRB">1E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="6" name="6"<?php if ($DATA['6']) echo 'disabled' ?>/>
                            <label for="6" class="seatRB">1F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="7" name="7"<?php if ($DATA['7']) echo 'disabled' ?>/>
                            <label for="7" class="seatRB">1G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="8" name="8"<?php if ($DATA['8']) echo 'disabled' ?>/>
                            <label for="8" class="seatRB">1H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="9" name="9"<?php if ($DATA['9']) echo 'disabled' ?>/>
                            <label for="9" class="seatRB">1I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-2">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="10" name="10"<?php if ($DATA['10']) echo 'disabled' ?>/>
                            <label for="10" class="seatRB">2A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="11" name="11"<?php if ($DATA['11']) echo 'disabled' ?>/>
                            <label for="11" class="seatRB">2B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="12" name="12"<?php if ($DATA['12']) echo 'disabled' ?>/>
                            <label for="12" class="seatRB">2C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="13" name="13"<?php if ($DATA['13']) echo 'disabled' ?>/>
                            <label for="13" class="seatRB">2D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="14" name="14"<?php if ($DATA['14']) echo 'disabled' ?>/>
                            <label for="14" class="seatRB">2E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="15" name="15"<?php if ($DATA['15']) echo 'disabled' ?>/>
                            <label for="15" class="seatRB">2F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="16" name="16"<?php if ($DATA['16']) echo 'disabled' ?>/>
                            <label for="16" class="seatRB">2G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="17" name="17"<?php if ($DATA['17']) echo 'disabled' ?>/>
                            <label for="17" class="seatRB">2H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="18" name="18"<?php if ($DATA['18']) echo 'disabled' ?>/>
                            <label for="18" class="seatRB">2I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-3">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="19" name="19"<?php if ($DATA['19']) echo 'disabled' ?>/>
                            <label for="19" class="seatRB">3A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="20" name="20"<?php if ($DATA['20']) echo 'disabled' ?>/>
                            <label for="20" class="seatRB">3B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="21" name="21"<?php if ($DATA['21']) echo 'disabled' ?>/>
                            <label for="21" class="seatRB">3C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="22" name="22"<?php if ($DATA['22']) echo 'disabled' ?>/>
                            <label for="22" class="seatRB">3D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="23" name="23"<?php if ($DATA['23']) echo 'disabled' ?>/>
                            <label for="23" class="seatRB">3E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="24" name="24"<?php if ($DATA['24']) echo 'disabled' ?>/>
                            <label for="24" class="seatRB">3F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="25" name="25"<?php if ($DATA['25']) echo 'disabled' ?>/>
                            <label for="25" class="seatRB">3G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="26" name="26"<?php if ($DATA['26']) echo 'disabled' ?>/>
                            <label for="26" class="seatRB">3H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="27" name="27"<?php if ($DATA['27']) echo 'disabled' ?>/>
                            <label for="27" class="seatRB">3I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-4">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="28" name="28"<?php if ($DATA['28']) echo 'disabled' ?>/>
                            <label for="28" class="seatRB">4A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="29" name="29"<?php if ($DATA['29']) echo 'disabled' ?>/>
                            <label for="29" class="seatRB">4B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="30" name="30"<?php if ($DATA['30']) echo 'disabled' ?>/>
                            <label for="30" class="seatRB">4C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="31" name="31"<?php if ($DATA['31']) echo 'disabled' ?>/>
                            <label for="31" class="seatRB">4D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="32" name="32"<?php if ($DATA['32']) echo 'disabled' ?>/>
                            <label for="32" class="seatRB">4E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="33" name="33"<?php if ($DATA['33']) echo 'disabled' ?>/>
                            <label for="33" class="seatRB">4F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="34" name="34"<?php if ($DATA['34']) echo 'disabled' ?>/>
                            <label for="34" class="seatRB">4G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="35" name="35"<?php if ($DATA['35']) echo 'disabled' ?>/>
                            <label for="35" class="seatRB">4H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="36" name="36"<?php if ($DATA['36']) echo 'disabled' ?>/>
                            <label for="36" class="seatRB">4I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-5">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="37" name="37"<?php if ($DATA['37']) echo 'disabled' ?>/>
                            <label for="37" class="seatRB">5A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="38" name="38"<?php if ($DATA['38']) echo 'disabled' ?>/>
                            <label for="38" class="seatRB">5B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="39" name="39"<?php if ($DATA['39']) echo 'disabled' ?>/>
                            <label for="39" class="seatRB">5C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="40" name="40"<?php if ($DATA['40']) echo 'disabled' ?>/>
                            <label for="40" class="seatRB">5D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="41" name="41"<?php if ($DATA['41']) echo 'disabled' ?>/>
                            <label for="41" class="seatRB">5E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="42" name="42"<?php if ($DATA['42']) echo 'disabled' ?>/>
                            <label for="42" class="seatRB">5F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="43" name="43"<?php if ($DATA['43']) echo 'disabled' ?>/>
                            <label for="43" class="seatRB">5G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="44" name="44"<?php if ($DATA['44']) echo 'disabled' ?>/>
                            <label for="44" class="seatRB">5H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="45" name="45"<?php if ($DATA['45']) echo 'disabled' ?>/>
                            <label for="45" class="seatRB">5I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-6">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="46" name="46"<?php if ($DATA['46']) echo 'disabled' ?>/>
                            <label for="46" class="seatRB">6A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="47" name="47"<?php if ($DATA['47']) echo 'disabled' ?>/>
                            <label for="47" class="seatRB">6B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="48" name="48"<?php if ($DATA['48']) echo 'disabled' ?>/>
                            <label for="48" class="seatRB">6C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="49" name="49"<?php if ($DATA['49']) echo 'disabled' ?>/>
                            <label for="49" class="seatRB">6D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="50" name="50"<?php if ($DATA['50']) echo 'disabled' ?>/>
                            <label for="50" class="seatRB">6E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="51" name="51"<?php if ($DATA['51']) echo 'disabled' ?>/>
                            <label for="51" class="seatRB">6F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="52" name="52"<?php if ($DATA['52']) echo 'disabled' ?>/>
                            <label for="52" class="seatRB">6G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="53" name="53"<?php if ($DATA['53']) echo 'disabled' ?>/>
                            <label for="53" class="seatRB">6H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="54" name="54"<?php if ($DATA['54']) echo 'disabled' ?>/>
                            <label for="54" class="seatRB">6I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-7">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="55" name="55"<?php if ($DATA['55']) echo 'disabled' ?>/>
                            <label for="55" class="seatRB">7A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="56" name="56"<?php if ($DATA['56']) echo 'disabled' ?>/>
                            <label for="56" class="seatRB">7B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" name="57" name="57"<?php if ($DATA['57']) echo 'disabled' ?>/>
                            <label for="57" class="seatRB">7C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="58" name="58"<?php if ($DATA['58']) echo 'disabled' ?>/>
                            <label for="58" class="seatRB">7D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="59" name="59"<?php if ($DATA['59']) echo 'disabled' ?>/>
                            <label for="59" class="seatRB">7E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="60" name="60"<?php if ($DATA['60']) echo 'disabled' ?>/>
                            <label for="60" class="seatRB">7F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="61" name="61"<?php if ($DATA['61']) echo 'disabled' ?>/>
                            <label for="61" class="seatRB">7G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="62" name="62"<?php if ($DATA['62']) echo 'disabled' ?>/>
                            <label for="62" class="seatRB">7H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="63" name="63"<?php if ($DATA['63']) echo 'disabled' ?>/>
                            <label for="63" class="seatRB">7I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-8">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="64" name="64"<?php if ($DATA['64']) echo 'disabled' ?>/>
                            <label for="64" class="seatRB">8A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="65" name="65"<?php if ($DATA['65']) echo 'disabled' ?>/>
                            <label for="65" class="seatRB">8B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="66" name="66"<?php if ($DATA['66']) echo 'disabled' ?>/>
                            <label for="66" class="seatRB">8C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="67" name="67" <?php if ($DATA['67']) echo 'disabled' ?>/>
                            <label for="67" class="seatRB">8D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="68" name="68"<?php if ($DATA['68']) echo 'disabled' ?>/>
                            <label for="68" class="seatRB">8E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="69" name="69"<?php if ($DATA['69']) echo 'disabled' ?>/>
                            <label for="69" class="seatRB">8F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="70" name="70"<?php if ($DATA['70']) echo 'disabled' ?>/>
                            <label for="70" class="seatRB">8G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="71" name="71"<?php if ($DATA['71']) echo 'disabled' ?>/>
                            <label for="71" class="seatRB">8H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="72" name="72"<?php if ($DATA['72']) echo 'disabled' ?>/>
                            <label for="72" class="seatRB">8I</label>
                        </li>
                    </ol>
                </li>
                <li class="row.rowSpec row-9">
                    <ol class="seats" type="A">
                        <li class="seat">
                            <input type="checkbox" id="73" name="73"<?php if ($DATA['73']) echo 'disabled' ?>/>
                            <label for="73" class="seatRB">9A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="74" name="74"<?php if ($DATA['74']) echo 'disabled' ?>/>
                            <label for="74" class="seatRB">9B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="75" name="75"<?php if ($DATA['75']) echo 'disabled' ?>/>
                            <label for="75" class="seatRB">9C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="76" name="76"<?php if ($DATA['76']) echo 'disabled' ?>/>
                            <label for="76" class="seatRB">9D</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="77" name="77"<?php if ($DATA['77']) echo 'disabled' ?>/>
                            <label for="77" class="seatRB">9E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="78" name="78"<?php if ($DATA['78']) echo 'disabled' ?>/>
                            <label for="78" class="seatRB">9F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="79" name="79"<?php if ($DATA['79']) echo 'disabled' ?>/>
                            <label for="79" class="seatRB">9G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="80" name="80"<?php if ($DATA['80']) echo 'disabled' ?>/>
                            <label for="80" class="seatRB">9H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="81" name="81"<?php if ($DATA['81']) echo 'disabled' ?>/>
                            <label for="81" class="seatRB">9I</label>
                        </li>
                    </ol>
                </li>
            </ol>
            <div class="exit exit--back fuselage"></div>
        </div>
    </div>
    <div class="modal-content">
        <div id="first">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Kontakt informacije</h4>
            </div>
            <div class="modal-body">
                
                    <div class="form-group">
                        <label for="ime" class="col-sm-3 control-label">Ime</label>
                        <div class="col-sm-9">
                            <input type="text" id="ime" class="form-control" name="ime" required placeholder="Ime"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prezime" class="col-sm-3 control-label">Prezime</label>
                        <div class="col-sm-9">
                            <input type="text" id="prezime" class="form-control" name="prezime" required placeholder="Prezime"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailAdr" class="col-sm-3 control-label">Vaša e-mail adresa</label>
                        <div class="col-sm-9">
                            <input type="email" id="emailAdr" class="form-control" name="email" required placeholder="Vaša e-mail adresa"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNum" class="col-sm-3 control-label">Kontakt telefon</label>
                        <div class="col-sm-9">
                            <input type="text" id="phoneNum" class="form-control" name="phone" required placeholder="Kontakt telefon"/>
                        </div>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="conf">Pošalji</button>
                <!--                        <button type="button" class="btn btn-default" data-dismiss="modal" id="ticketDismiss">Odustani</button>-->
            </div>
        </div>
        
        <div id="second" style="display: none;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Rezervacija uspešna</h4>
            </div>
            <div class="modal-body">
                <p>Vaša rezervacija je uspešno sačuvana. Molimo, proverite vaš inbox.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="endOfRes">U redu</button>
            </div>
        </div>
    </div>
</form>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>
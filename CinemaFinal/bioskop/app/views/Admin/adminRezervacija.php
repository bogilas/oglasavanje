<?php include 'app/views/_global/beforeContent.php'; ?>
        <div class="container white">
            <div class="row dark">
                <h4 class="text-uppercase text-center">Rezervisite karte</h4>
            </div>
            <div class="reserve">
                <form>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 form-group">
                            <label for="film">Izaberite film</label>
                            <select id="film" class="form-control">
                                <option>-- Izaberite film --</option>
                                <option value="Veliki kineski zid">Veliki kineski zid</option>
                                <option value="Assassins Creed">Assassins Creed</option>
                                <option value="La La Land">La La Land</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-3 form-group specCase">
                            <label for="item">Izaberite datum</label>
                            <select id="item" class="form-control">
                              <option>Cetvrtak</option>
                              <option>Petak</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-3 form-group specCase">
                            <label for="vremeProj">Vreme projekcije</label>
                            <select id="vremeProj" class="form-control">
                                <option value="18">18:30</option>
                                <option value="20">20:00</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-sm-3 form-group specCase">
                            <label for="brKarata">Broj karata</label>
                            <input type="number" id="brKarata" class="form-control" placeholder="Broj karata" min="0" max="3">
                        </div>
                    </div>
                    <p class="text-center"><button type="button" class="btn btn-success specCase" id="ticketRes" data-toggle="modal" data-target="#myModal">Rezervisi</button></p>
                </form>
                <!-- EXP -->
                <div class="plane specCase">
                  <div class="cockpit">
                    <h1>Izaberite sedista</h1>
                  </div>
                  <div class="exit exit--front fuselage"></div>
                    <ol class="cabin fuselage">
                      <li class="row.rowSpec row-1">
                        <ol class="seats" type="A">
                          <li class="seat">
                            <input type="checkbox" id="1A" />
                            <label for="1A" class="seatRB">1A</label>
                          </li>
                          <li class="seat">
                            <input type="checkbox" id="1B" />
                            <label for="1B" class="seatRB">1B</label>
                          </li>
                          <li class="seat">
                            <input type="checkbox" id="1C" />
                            <label for="1C" class="seatRB">1C</label>
                          </li>
                          <li class="seat">
                        <input type="checkbox" id="1D" />
                        <label for="1D" class="seatRB">1D</label>
                      </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="1E" />
                          <label for="1E" class="seatRB">1E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1F" />
                          <label for="1F" class="seatRB">1F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1G" />
                          <label for="1G" class="seatRB">1G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1H" />
                          <label for="1H" class="seatRB">1H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="1I" />
                          <label for="1I" class="seatRB">1I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-2">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="2A" />
                          <label for="2A" class="seatRB">2A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2B" />
                          <label for="2B" class="seatRB">2B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2C" />
                          <label for="2C" class="seatRB">2C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2D" />
                          <label for="2D" class="seatRB">2D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2E" />
                          <label for="2E" class="seatRB">2E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2F" />
                          <label for="2F" class="seatRB">2F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2G" />
                          <label for="2G" class="seatRB">2G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2H" />
                          <label for="2H" class="seatRB">2H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="2I" />
                          <label for="2I" class="seatRB">2I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-3">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="3A" />
                          <label for="3A" class="seatRB">3A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3B" />
                          <label for="3B" class="seatRB">3B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3C" />
                          <label for="3C" class="seatRB">3C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3D" />
                          <label for="3D" class="seatRB">3D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3E" />
                          <label for="3E" class="seatRB">3E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3F" />
                          <label for="3F" class="seatRB">3F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3G" />
                          <label for="3G" class="seatRB">3G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3H" />
                          <label for="3H" class="seatRB">3H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="3I" />
                          <label for="3I" class="seatRB">3I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-4">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="4A" />
                          <label for="4A" class="seatRB">4A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4B" />
                          <label for="4B" class="seatRB">4B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4C" />
                          <label for="4C" class="seatRB">4C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4D" />
                          <label for="4D" class="seatRB">4D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4E" />
                          <label for="4E" class="seatRB">4E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="4F" />
                          <label for="4F" class="seatRB">4F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4G" />
                          <label for="4G" class="seatRB">4G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4H" />
                          <label for="4H" class="seatRB">4H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="4I" />
                          <label for="4I" class="seatRB">4I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-5">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="5A" />
                          <label for="5A" class="seatRB">5A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5B" />
                          <label for="5B" class="seatRB">5B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5C" />
                          <label for="5C" class="seatRB">5C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5D" />
                          <label for="5D" class="seatRB">5D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5E" />
                          <label for="5E" class="seatRB">5E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5F" />
                          <label for="5F" class="seatRB">5F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="5G" />
                          <label for="5G" class="seatRB">5G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5H" />
                          <label for="5H" class="seatRB">5H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="5I" />
                          <label for="5I" class="seatRB">5I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-6">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="6A" />
                          <label for="6A" class="seatRB">6A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6B" />
                          <label for="6B" class="seatRB">6B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6C" />
                          <label for="6C" class="seatRB">6C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="6D" />
                          <label for="6D" class="seatRB">6D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6E" />
                          <label for="6E" class="seatRB">6E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6F" />
                          <label for="6F" class="seatRB">6F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6G" />
                          <label for="6G" class="seatRB">6G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6H" />
                          <label for="6H" class="seatRB">6H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="6I" />
                          <label for="6I" class="seatRB">6I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-7">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" disabled id="7A" />
                          <label for="7A" class="seatRB">7A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7B" />
                          <label for="7B" class="seatRB">7B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7C" />
                          <label for="7C" class="seatRB">7C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7D" />
                          <label for="7D" class="seatRB">7D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7E" />
                          <label for="7E" class="seatRB">7E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7F" />
                          <label for="7F" class="seatRB">7F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7G" />
                          <label for="7G" class="seatRB">7G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7H" />
                          <label for="7H" class="seatRB">7H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="7I" />
                          <label for="7I" class="seatRB">7I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-8">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="8A" />
                          <label for="8A" class="seatRB">8A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="8B" />
                          <label for="8B" class="seatRB">8B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8C" />
                          <label for="8C" class="seatRB">8C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8D" />
                          <label for="8D" class="seatRB">8D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8E" />
                          <label for="8E" class="seatRB">8E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8F" />
                          <label for="8F" class="seatRB">8F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8G" />
                          <label for="8G" class="seatRB">8G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8H" />
                          <label for="8H" class="seatRB">8H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="8I" />
                          <label for="8I" class="seatRB">8I</label>
                        </li>
                      </ol>
                    </li>
                    <li class="row.rowSpec row-9">
                      <ol class="seats" type="A">
                        <li class="seat">
                          <input type="checkbox" id="9A" />
                          <label for="9A" class="seatRB">9A</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9B" />
                          <label for="9B" class="seatRB">9B</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9C" />
                          <label for="9C" class="seatRB">9C</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9D" />
                          <label for="9D" class="seatRB">9D</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="9E" />
                          <label for="9E" class="seatRB">9E</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9F" />
                          <label for="9F" class="seatRB">9F</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9G" />
                          <label for="9G" class="seatRB">9G</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" disabled id="9H" />
                          <label for="9H" class="seatRB">9H</label>
                        </li>
                        <li class="seat">
                          <input type="checkbox" id="9I" />
                          <label for="9I" class="seatRB">9I</label>
                        </li>
                      </ol>
                    </li>
                </ol>
                <div class="exit exit--back fuselage"></div>
              </div>
            </div>
<?php include 'app/views/_global/afterContent.php'; ?>
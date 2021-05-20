<tr>
                    <td><label>Country</label></td>
                </tr>
                <tr> 
                    <td><select type="text" name="country" id="countryId" size="1" class="form-control"
                        onchange="getStatesByCountry();">
                        <option value="">Country</option>
                        <?php
                        if ($allCountries->num_rows > 0) {
                            while ($country = $allCountries->fetch_object()) {
                                $countryId = $country->id;
                                $countryName = $country->name; ?>
                        <option value="<?php echo $countryId; ?>"><?php echo $countryName; ?>
                        </option>
                        <?php }
                        }
                        ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><label>State</label></td>
                </tr>
                <tr >
                    <td><select class="form-control"  name="state" id="stateId"
                        onchange="getCityByState();">
                        <option value="">State</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><label>City</label></td>
                </tr>
                <tr >
                    <td><select class="form-control"  name="city" id="cityDiv">
                        <option value="">City</option>
                    </select>
                    </td>
                </tr>
<div class='grid_3'>
    <ul class='da-circular-stat-wrap'>
        <li class='da-circular-stat {fillColor: '#a6d037', value: 55, maxValue: 98, label: 'Seeds Collected'}'></li>
        <li class='da-circular-stat {fillColor: '#ea799b', percent: true, value: 200, maxValue: 241, label: 'iPads Cloned'}'></li>
        <li class='da-circular-stat {fillColor: '#fab241', value: 124, maxValue: 523, label: 'Androids Bought'}'></li>
        <li class='da-circular-stat {fillColor: '#61a5e4', percent: true, value: 42, maxValue: 100, label: 'Funds Collected'}'></li>
    </ul>
    <div class='da-panel-widget'>
        <h1>Estimated Revenue</h1>
        <div id='da-ex-gchart-line' style='height:225px;'></div>
    </div>
</div>

<div class='grid_1'>
    <div class='da-panel-widget'>
        <h1>Summary</h1>
        <ul class='da-summary-stat'>
            <li>
                <a href='#'>
                    <span class='da-summary-icon' style='background-color:#e15656;'>
                        <?php echo $this->Html->image('/dandelion/images/icons/white/32/truck.png', array( 'alt'=>'')); ?>
                    </span>
                    <span class='da-summary-text'>
                        <span class='value up'>211</span>
                        <span class='label'>Packages Distributed</span>
                    </span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span class='da-summary-icon' style='background-color:#a6d037;'>
                        <?php echo $this->Html->image('/dandelion/images/icons/white/32/sport_shirt.png', array( 'alt'=>'')); ?>
                    </span>
                    <span class='da-summary-text'>
                        <span class='value'>512</span>
                        <span class='label'>T-Shirts Sold</span>
                    </span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span class='da-summary-icon' style='background-color:#ea799b;'>
                        <?php echo $this->Html->image('/dandelion/images/icons/white/32/abacus.png', array( 'alt'=>'')); ?>
                    </span>
                    <span class='da-summary-text'>
                        <span class='value up'>286</span>                                        
                        <span class='label'>Transactions Completed</span>
                    </span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span class='da-summary-icon' style='background-color:#fab241;'>
                        <?php echo $this->Html->image('/dandelion/images/icons/white/32/airplane.png', array( 'alt'=>'')); ?>
                    </span>
                    <span class='da-summary-text'>
                        <span class='value down'>61</span>
                        <span class='label'>Planes Flown</span>
                    </span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span class='da-summary-icon' style='background-color:#61a5e4;'>
                        <?php echo $this->Html->image('/dandelion/images/icons/white/32/shopping_basket_2.png', array( 'alt'=>'')); ?>
                    </span>
                    <span class='da-summary-text'>
                        <span class='value'>42</span>
                        <span class='label'>Shops Visited</span>
                    </span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span class='da-summary-icon' style='background-color:#656565;'>
                        <?php echo $this->Html->image('/dandelion/images/icons/white/32/users_2.png', array( 'alt'=>'')); ?>
                    </span>
                    <span class='da-summary-text'>
                        <span class='value'>266</span>
                        <span class='label'>Customers Satisfied</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class='clear'></div>

<div class='grid_2'>
    <div class='da-panel'>
        <div class='da-panel-header'>
            <span class='da-panel-title'>
                <?php echo $this->Html->image('/dandelion/images/icons/color/wand.png', array( 'alt'=>'')); ?>
                Wizard Form
            </span>
            
        </div>
        <div class='da-panel-content'>
            <form id='da-ex-wizard-form' class='da-form'>
                <fieldset class='da-form-inline'>
                    <legend>Account</legend>
                    <div class='da-form-row'>
                        <label>Username <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <input type='text' name='username' class='required' />
                        </div>
                    </div>
                    <div class='da-form-row'>
                        <label>Email <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <input type='text' name='email' class='required email' />
                        </div>
                    </div>
                    <div class='da-form-row'>
                        <label>Password <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <input type='password' name='password' class='required' />
                        </div>
                    </div>
                </fieldset>
                <fieldset class='da-form-inline'>
                    <legend>Member</legend>
                    <div class='da-form-row'>
                        <label>Fullname <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <input type='text' name='fullname' class='required' />
                        </div>
                    </div>
                    <div class='da-form-row'>
                        <label>Address <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <textarea name='address' class='required'></textarea>
                        </div>
                    </div>
                    <div class='da-form-row'>
                        <label>Gender <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <ul class='da-form-list'>
                                <li><input type='radio' name='gender' class='required' /> <label>Male</label></li>
                                <li><input type='radio' name='gender' /> <label>Female</label></li>
                            </ul>
                            <label for='gender' class='error' generated='true' style='display:none'></label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class='da-form-inline'>
                    <legend>Membership</legend>
                    <div class='da-form-row'>
                        <label>Membership Period <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <select name='period' class='required'>
                                <option>1 Month</option>
                                <option>3 Months</option>
                                <option>6 Months</option>
                                <option>1 Year</option>
                            </select>
                        </div>
                    </div>
                    <div class='da-form-row'>
                        <label>Package <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <ul class='da-form-list'>
                                <li><input type='radio' name='package' class='required' /> <label>Basic</label></li>
                                <li><input type='radio' name='package' /> <label>Full</label></li>
                                <li><input type='radio' name='package' /> <label>Premium</label></li>
                            </ul>
                            <label for='package' class='error' generated='true' style='display:none'></label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class='da-form-inline'>
                    <legend>Confirmation</legend>
                    <div class='da-form-row'>
                        <label>Payment Method <span class='required'>*</span></label>
                        <div class='da-form-item large'>
                            <select name='payment' class='required'>
                                <option>PayPal</option>
                                <option>Visa</option>
                                <option>Mastercard</option>
                                <option>Wire Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class='da-form-row'>
                        <div class='da-form-item large'>
                            <ul class='da-form-list inline'>
                                <li><input type='checkbox' name='tos' class='required' /> <label>I agree to the terms of service <span class='required'>*</span></label></li>
                            </ul>
                            <label for='tos' class='error' generated='true' style='display:none'></label>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class='grid_2'>
    <div class='da-panel'>
        <div class='da-panel-header'>
            <span class='da-panel-title'>
                <?php echo $this->Html->image('/dandelion/images/icons/color/calendar_2.png', array( 'alt'=>'')); ?>
                Holiday Calendar
            </span>
            
        </div>
        <div class='da-panel-content with-padding'>
            <div id='da-ex-calendar-gcal'></div>
        </div>
    </div>
</div>
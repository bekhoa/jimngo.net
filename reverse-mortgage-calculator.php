<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reverse Mortgage Calculator - HECM Line of Credit</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="reverse mortgage calculator" />
    <meta name="description"
        content="For borrowers 62 and older - Use it as a line of credit (HECM) or to purchase a new home - Estimate how much you may qualify for with my calculator." />
    <meta name="subject" content="Reverse Mortgage Calculator" />
    <meta name="language" content="English" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="Jim Ngo" />
    <meta name="copyright" content="Jim Ngo" />
    <meta property="og:url" content="https://www.jimngo.net/reverse-mortgage-calculator" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Reverse Mortgage Calculator - HECM Line of Credit" />
    <meta property="og:description"
        content="For borrowers 62 and older - Use it as a line of credit (HECM) or to purchase a new home - Estimate how much you may qualify for with my calculator." />
    <meta property="og:image" content="image/reverse_mortgage.jpg" />
    <link rel="canonical" href="https://www.jimngo.net/reverse-mortgage-calculator" />
    <link rel="icon" href="image/favicon-16x16.png" type="image/gif" sizes="16x16" />
    <link rel="stylesheet" href="style/style.min.css">
    <link rel="stylesheet" href="style/fontawesome-free-5.11.1-web/css/all.min.css">
</head>

<body>
    <?php include('include/title.php'); ?>
    <!-- Page Description ---------------------------------------------------->
    <main class="main">
        <div class="flex-center">
            <!-- About Me ---------------------------------------------------->
            <div class="col-3 col-s-4 light-gray radius-5">
                <?php include('include/about.php'); ?>
            </div>
            <!-- Page Description -------------------------------------------->
            <div class="col-9 col-s-8">
                <h1 style="font-size: 150%; color: dodgerblue">Reverse Mortgage - Home Equity Conversion Mortgage
                    (HECM)</h1>
                <p>A reverse mortgage is a home-secured loan that can turn part of the equity you’ve built up in
                    your house into funds you can use today, or a line of credit that will be there when you need
                    it. Specifically designed for homeowners age 62+, it offers all the benefits of a traditional
                    line of credit that you can get from a bank but with additional benefits - including a flexible
                    repayment feature. As with any mortgage, the title to the home remains in your name, not the
                    lender’s.</p>
                <p>At a minimum, to be eligible you must be 62 years of age or older; you must have a certain
                    percentage of equity in the home; and the house must be your principal residence.</p>
                <h2 style="font-size: 120%; color: dodgerblue">Reverse Mortgage Advantages</h2>
                <p>A reverse mortgage has certain advantages over other types of home equity-based loans. Since a
                    HECM reverse mortgage is FHA-insured, if the loan balance ever exceeds the value of your home
                    you and your heirs are not responsible to pay the excess. As long as you satisfy your loan
                    obligations, which include maintaining your home, paying your real estate taxes, property
                    insurance and any homeowners association (HOA) fees.</p>
                <h3 style="font-size: 120%; color: dodgerblue"><i>"You’ve worked hard to build the equity in your
                        home. Now it’s time to put that equity to work for you. Use my free reverse mortgage
                        calculator to determine how much you may qualify for."</i></h3>
            </div>
        </div>
    </main>
    <div style="height: 8px;" id="calculator"></div>
    <!-- Calculator ---------------------------------------------------------->
    <section id="reverse-calculator-widget">
        <div class="banner dark-cerulean font-large" id="hecm-ss">
            <h2 class="slide showing">HECM</h2>
            <h2 class="slide">Buy a home</h2>
            <h2 class="slide">Establish a rainy day fund</h2>
            <h2 class="slide">Supplement your income</h2>
            <h2 class="slide">Line of Credit</h2>
            <h2 class="slide">Repay a home equity loan</h2>
            <h2 class="slide">Pay off credit cards</h2>
            <h2 class="slide">Pay for healthcare</h2>
            <h2 class="slide">Cover in-home care costs</h2>
            <h2 class="slide">Home improvements</h2>
            <h2 class="slide">Home modifications</h2>
        </div>
        <div class="main flex-center">
            <!-- Column 1-->
            <div class="col-4 col-s-6" id="users-inputs">
                <!-- Slide 1 - Begin Calculator -->
                <div class="widget-slide medium" id="slide-1" style="height: scrollheight ">
                    <h3 class="card-header">How Much Money Can I Get?</h3>
                    <div class="card-body">
                        <p>The specific amount depends on several factors, including:</p>
                        <ul>
                            <li>Your age.</li>
                            <li>Current interest rate.</li>
                            <li>Principal Limit Factor.</li>
                            <li>The type of reverse mortgage you select.</li>
                            <li>Appraised value of your home.</li>
                            <li>Federal Housing Administration (FHA) lending limits.</li>
                        </ul>
                        <p>HUD also regulates the amount of money that can be withdrawn during the first year of your
                            reverse mortgage. This is to help preserve your home equity for a longer period of time.</p>
                        <div class="flex-center">
                            <button class="btn-blue-brdr" onclick="show_slide('slide-2')">Get Started</button>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 - Owner's Info -->
                <div class="widget-slide slow" id="slide-2">
                    <h3 class="card-header">Home Owner's Information</h3>
                    <div class="card-body">
                        <!-- Homeowner's Age -->
                        <div class="inputTitleContainer">
                            <h3 class="inputTitle">Home Owner's Age:</h3>
                            <div class="inputValue"><span id="AGE"></span></div>
                        </div>
                        <div class="sliderContainer"><input class="slider" id="age" max="80" min="62" step="1"
                                type="range" value="65" oninput="calc()" /></div>
                        <div class="inputTitleContainer">
                            <h3 class="inputTitle">Loan Purpose:</h3>
                            <select class="inputValue" id="loan-purpose" onchange="calc()">
                                <option value="Purchase" selected>Purchase</option>
                                <option value="Line of Credit">Line of Credit</option>
                            </select>
                        </div>
                        <div id="cash-available">
                            <div class="inputTitleContainer">
                                <h3 class="inputTitle">Cash by Borrower:</h3>
                                <div class="inputValue">$<span id="CA"></span></div>
                            </div>
                            <div class="sliderContainer"><input class="slider" id="ca" max="1000000" min="0"
                                    step="10000" type="range" value="100000" oninput="calc()" /></div>
                        </div>
                        <div id="home-appraised-value">
                            <!-- Home Appraised Value -->
                            <div class="inputTitleContainer">
                                <h3 class="inputTitle">Home Appraised Value:</h3>
                                <div class="inputValue">$<span id="HAV"></span></div>
                            </div>
                            <div class="sliderContainer"><input class="slider" id="hav" max="1000000" min="100000"
                                    step="10000" type="range" value="300000" oninput="calc()" />
                            </div>
                            <!-- Current Mortgage Balance -->
                            <div class="inputTitleContainer">
                                <h3 class="inputTitle">Current Mortgage Balance:</h3>
                                <div class="inputValue">$<span id="CMB"></span></div>
                            </div>
                            <div class="sliderContainer"><input class="slider" id="cmb" max="500000" min="0"
                                    step="10000" type="range" value="0" oninput="calc()" /></div>
                        </div>
                        <div class="flex-center">
                            <button class="widget-submit-btn" onclick="show_slide('slide-1')">Back</button>
                            <button class="widget-submit-btn" onclick="show_slide('slide-3')">Next</button>
                        </div>
                        <p id="max-hecm-warning" style="text-align:center; text-transform: uppercase;"></p>
                        <p id="no-equity-warning" style="text-align:center; text-transform: uppercase;"></p>
                    </div>
                </div>
                <!-- Slide 3 - Loan Details -->
                <div class="widget-slide slow" id="slide-3">
                    <h3 class="card-header">Loan Information</h3>
                    <div class="card-body">
                        <!-- Interest Option: Fixed or Variable -->
                        <div class="inputTitleContainer">
                            <h3 class="inputTitle">Interest Rate Option:</h3>
                            <select class="inputValue" id="rate-option" onchange="calc()">
                                <option id="fixed-option" value="Fixed" selected>Fixed</option>
                                <option id="variable-option" value="Variable">Variable</option>
                            </select>
                        </div>
                        <!-- Expected Interest Rate -->
                        <div class="inputTitleContainer">
                            <h3 class="inputTitle">Expected Interest Rate:</h3>
                            <div class="inputValue"><span id="INT"></span>%</div>
                        </div>
                        <div class="sliderContainer"><input class="slider" id="int" max="8.875" min="3" step="0.125"
                                type="range" value="5.0" oninput="calc()" /></div>
                        <!-- Fixed Rate -->
                        <div id="fixed-rate">
                            <p>This option have come to be a favorite in the HECM marketplace since 2009, with about
                                67% of originated reverse mortgage loans having a fixed rate:</p>
                            <ul>
                                <li>Fixed rate will remain the same for the entire loan term, so you are protected
                                    if market rates rise.</li>
                                <li>Borrowers who choose a fixed rate reverse mortgage must take their funds as a
                                    lump sum, as opposed to other disbursement options offered at a variable rate.</li>
                                <li>When taking a lump sum, borrowers are restricted to pull only up to 60% of the
                                    principal limit of the loan.</li>
                            </ul>
                            <p>Due to these details, fixed rate reverse mortgages are usually best for borrowers who
                                plan to use their reverse mortgage funds all at once, such as to pay off an existing
                                mortgage or other debt, or to make major home repairs or modifications.</p>
                        </div>
                        <!-- Variable Rate -->
                        <div id="variable-rate">
                            <p>The less popular, but oftentimes the more flexible option, is the variable rate. Just
                                as the fixed rate is “fixed” for the loan period, a variable rate varies throughout the
                                loan period. There are pros and cons to variable rate reverse mortgages:</p>
                            <ul>
                                <li>They come with more disbursement options then a fixed rate loan. Borrowers may
                                    choose between a line of credit, monthly payments, a lump sum, or a combination of
                                    the three.</li>
                                <li>Interest is only charged on funds that have been withdrawn. This means that, if
                                    you have a line of credit that you rarely use, you will only be charged interest on
                                    the amount withdrawn.</li>
                                <li>Unused lines of credit may also grow with time, allowing the borrower even more
                                    flexibility in the amount available for them to borrow.</li>
                                <li>Greater risk of your interest rate rising quickly and drastically.</li>
                            </ul>
                            <p>In general, variable rates are best for borrowers who plan to use their reverse mortgage
                                funds over time, or in rare instances. In this way, borrowers may use it to add to their
                                existing fixed income every month, to supplement their other retirement accounts, or as
                                a stand by account so money is readily available in the case of an emergency.</p>
                        </div>
                        <div class="flex-center">
                            <button class="widget-submit-btn" onclick="show_slide('slide-2')">Back</button>
                            <button class="widget-submit-btn" onclick="show_slide('slide-4')">Next</button>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 - Lender's Fees -->
                <div class="widget-slide slow" id="slide-4">
                    <h3 class="card-header">Lender's Fees</h3>
                    <div class="card-body">
                        <!-- Loan Origination Fee -->
                        <div class="inputTitleContainer">
                            <h3 class="inputTitle">Loan Origination Fee:</h3>
                            <div class="inputValue">$<span id="LOF"></span></div>
                        </div>
                        <div class="sliderContainer"><input class="slider" id="lof" max="6000" min="0" step="100"
                                type="range" value="3500" oninput="calc()" /></div>
                        <!-- Other Closing Costs -->
                        <div class="inputTitleContainer">
                            <h3 class="inputTitle">Other Closing Costs:</h3>
                            <div class="inputValue">$<span id="CC"></span></div>
                        </div>
                        <div class="sliderContainer"><input class="slider" id="cc" max="10000" min="2000" step="100"
                                type="range" value="3029" oninput="calc()" /></div>
                        <div class="flex-center">
                            <button class="widget-submit-btn" onclick="show_slide('slide-3')">Back</button>
                            <button class="widget-submit-btn" onclick="show_slide('slide-5')">Next</button>
                        </div>
                    </div>
                </div>
                <!-- Slide 5 - Calculation Results -->
                <div class="widget-slide slow" id="slide-5">
                    <h3 class="card-header">Results</h3>
                    <div class="card-body">
                        <!-- Results for Purchase Option -->
                        <div id="purchaseResults">
                            <div class="inputTitleContainer">
                                <h3 class="inputTitle">Purchase Price:</h3>
                                <div class="inputValue">$<span id="purchasePrice"></span></div>
                            </div>
                            <ul>
                                <li>Principal Limit Factor: <span id="PLF1"></span></li>
                                <li>Maximum Claim Amount: $<span id="maxClaim"></span></li>
                                <li>Equity Reserves: $<span id="erPurchase"></span></li>
                                <li>Reverse Mortgage: $<span id="pl$Purchase"></span></li>
                            </ul>
                        </div>
                        <!-- Results for Refis -->
                        <div id="refiResults">
                            <div class="inputTitleContainer">
                                <h3 class="inputTitle"><sup>*</sup>Line of Credit:</h3>
                                <div class="inputValue">$<span id="HECM"></span></div>
                            </div>
                            <ul>
                                <li>Principal Limit Factor: <span id="PLF2"></span></li>
                                <li>Maximum Claim Amount: $<span id="MAX"></span></li>
                                <li>Equity Reserves: $<span id="ER"></span></li>
                                <li>Reverse Mortgage Limit: $<span id="PL$"></span></li>
                                <li>Cash Advance Limit for the first year: $<span id="IniLimit$"></span></li>
                                <li>For Fixed Rate - you are required to take all of your money at closing in one
                                    lump sum.</li>
                                <li><sup>* </sup>Line of Credit is only available with Variable Rate.</li>
                            </ul>
                        </div>
                        <!-- Lender's Mandatory Fees -->
                        <div class="inputTitleContainer">
                            <h3 class="inputTitle">Lender's Closing Costs:</h3>
                            <div class="inputValue">$<span id="COST$"></span></div>
                        </div>
                        <ul>
                            <li>Mortgage Insurance Fee: $<span id="UFMIP"></span></li>
                            <li>Loan Origination Fee: $<span id="LOF_2"></span></li>
                            <li>Other Closing Costs: $<span id="CC_2"></span></li>
                        </ul>
                        <div class="flex-center">
                            <button class="widget-submit-btn" onclick="show_slide('slide-4')">Back</button>
                            <button class="widget-submit-btn" onclick="show_slide('slide-1')">Start Over</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="col-4 col-s-6" id="">
                <!-- Purchase Option -->
                <div class="tabcontent slow" id="purchase">
                    <h3 class="card-header">Purchase A Home</h3>
                    <div class="card-body">
                        <p>You can purchase a home by combining a one-time investment of your own funds (down
                            payment) with loan proceeds from a Home Equity Conversion Mortgage (HECM) to
                            complete the transaction. As with a traditional “forward” mortgage, the home you are
                            purchasing secures the loan.</p>
                        <p>However, unlike a traditional mortgage, there are no monthly mortgage payments, which
                            can help boost your cash flow. You own the home as long as you live in it. The loan
                            does not have to be repaid until you sell the home or no longer live there as your
                            primary residence. In order for the loan to remain in good standing, you must meet certain
                            home ownership obligations - which include maintaining the property, and keeping current
                            with property-related taxes and insurance payments.</p>
                    </div>
                </div>
                <!-- Refinance Option -->
                <div class="tabcontent slow" id="hecm">
                    <h3 class="card-header">Line of Credit</h3>
                    <div class="card-body">
                        <p>&#9989; Repayment Options</p>
                        <p>Pay as much or as little as you like each month toward principal and interest. As
                            with any mortgage, you must meet your loan obligations, keeping current with
                            property related taxes, insurance and maintenance, and any homeowners association
                            fees.</p>
                        <p>&#9989; High Flexibility Loans</p>
                        <p>Gain access to a line of credit you can tap into as needed, or a steady stream of
                            monthly funds.</p>
                        <p>&#9989; Protection</p>
                        <p>Reverse Mortgage comes with non-recourse protection so you’ll never owe more than
                            your house is worth when the loan is repaid.</p>
                    </div>
                </div>
            </div>
            <!-- Column 2 - Video -->
            <div class="col-4 col-s-12">
                <!-- Reverse Mortgage for Purchase -->
                <div id="h4p-video">
                    <h3 class="card-header">Reverse Mortgage For Purchase</h3>
                    <div class="card-body">
                        <video controls controlsList="nodownload">
                            <source src="Video/H4P.mp4"></video>
                    </div>
                </div>
                <!-- Reverse Mortgage Line of Credit -->
                <div id="hecm-video">
                    <h3 class="card-header">Reverse Mortgage For Retirement</h3>
                    <div class="card-body">
                        <video controls controlsList="nodownload">
                            <source src="Video/hecm.mp4"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Disclaimer ---------------------------------------------------------->
    <section id="disclaimer">
        <div class="main">
            <h3>DISCLAIMER:</h3>
            <ul>
                <li>The figures displayed above are based upon your input and may not reflect your actual mortgage
                    payment or total monthly costs.</li>
                <li><a href="https://www.hud.gov/program_offices/housing/sfh/hecm" rel="nofollow"
                        target="_blank">Principal Limit Factor Table</a> for HECM on or after 10/2/2017 was used in my
                    calculator.</li>
                <li>Calculations by this tool are believed to be accurate, yet are not guaranteed.</li>
            </ul>
        </div>
    </section>
    <!-- Q&A ----------------------------------------------------------------->
    <section id="QA">
        <div class="main">
            <div class="flex-center">
                <div class="col-6 col-s-6">
                    <button class="collapsible">What is a Reverse Mortgage?</button>
                    <div class="content medium">
                        <p>A reverse mortgage is a home-secured loan that’s exclusively for homeowners and homebuyers
                            age 62 and older. It allows borrowers to convert some of the equity in their home into
                            income-tax-free funds. (Not tax advice, consult a tax professional).</p>
                        <p>There are different loan products to choose from that offer you options on what interest rate
                            you are charged, how much money you can access, and how you receive your payments. Unlike a
                            regular “forward” mortgage or traditional home equity loan or home equity line of credit,
                            there are no monthly principal and interest payments as long as at least one of the
                            borrowers lives in the home as their primary residence.</p>
                        <p>As with any mortgage, in order for the loan to remain in good standing the borrower must also
                            keep up with property-related taxes, insurance and upkeep.</p>
                    </div>
                    <button class="collapsible">What is a Home Equity Conversion Mortgage (HECM)?</button>
                    <div class="content fast">
                        <p>A HECM is a reverse mortgage loan that's insured by the Federal Housing Administration (FHA).
                        </p>
                    </div>
                    <button class="collapsible">What are the basic requirements for a Reverse Mortgage?</button>
                    <div class="content medium">
                        <p>To be eligible for a reverse mortgage, you’ll need to meet the requirements set by the
                            federal government:
                            <ul>
                                <li>All borrowers must be age 62 or older (this applies to all co-owners listed on the
                                    home’s title).</li>
                                <li>The home must be your principal residence. And it must meet standards set by the
                                    United States Department of Housing and Urban Development (HUD) on property type and
                                    condition. You may be able to use your reverse mortgage to pay for any required
                                    repairs in order to meet these standards.</li>
                                <li>Eligible property types include single-family homes, 2- to 4-unit properties,
                                    manufactured homes meeting certain criteria, condominiums that are approved by the
                                    Federal Housing Administration (FHA), and townhouses. Co-ops do not qualify.</li>
                            </ul>
                        </p>
                    </div>
                    <button class="collapsible">What if I still owe money on a first or second mortgage?</button>
                    <div class="content fast">
                        <p>You may still be eligible. Proceeds from your reverse mortgage would first be used to pay off
                            any existing mortgage(s). This means the balance of your existing mortgage(s) will be added
                            to the balance of your reverse mortgage. A licensed RMF loan officer can help you find out
                            if you are eligible.</p>
                    </div>
                    <button class="collapsible">How can I receive the funds from a reverse mortgage?</button>
                    <div class="content fast">You have a number of choices for how you receive your funds:
                        <ul>
                            <li>Lump sum</li>
                            <li>Monthly advances (either for a fixed length of time, or as long as you live in the home)
                            </li>
                            <li>Line of credit (take funds when you need them) — this has become the most popular option
                            </li>
                            <li>Or a combination of the above</li>
                        </ul>
                    </div>
                    <button class="collapsible">How is a Reverse Mortgage different from a traditional home equity loan
                        or home equity line of credit?</button>
                    <div class="content medium">
                        <p>A reverse mortgage offers certain advantages:
                            <ul>
                                <li>With a traditional home equity loan or home equity line of credit, you must make
                                    monthly principal and interest payments on the balance while you live in the home -
                                    with a reverse mortgage, you don't. Your reverse mortgage balance, including accrued
                                    interest and fees, does not have to be repaid until you sell the home or permanently
                                    leave the home, as long as you meet your loan obligations (which includes keeping
                                    current with property-related taxes, insurance and upkeep).</li>
                                <li>With a reverse mortgage line of credit, the unused amount in your credit line
                                    actually grows over time - giving you access to more available funds. This means
                                    that the less you take out up front, the more will be available to you later.</li>
                                <li>And the lender cannot “freeze” or reduce the line of credit, as long as you fulfill
                                    your loan obligations - so it will be there if and when you need it.</li>
                            </ul>
                        </p>
                    </div>
                    <button class="collapsible">Will I be taxed on my reverse mortgage proceeds?</button>
                    <div class="content fast">
                        <p>Typically, reverse mortgage loan funds are not subject to income tax. Contact your tax
                            advisor for additional details.</p>
                    </div>
                    <button class="collapsible">Will a reverse mortgage affect my government benefits?</button>
                    <div class="content fast">
                        <p>The funds from a reverse mortgage generally do not affect regular Social Security or Medicare
                            benefits. However, needs-based benefits, such as Medicaid and Supplemental Security Income
                            (SSI), may be impacted. One of our licensed reverse mortgage specialists can provide
                            additional general information, but you should contact a financial professional or
                            government benefits specialist about your particular situation.</p>
                    </div>
                </div>
                <div class="col-6 col-s-6">
                    <button class="collapsible">How can I use the proceeds?</button>
                    <div class="content fast">
                        <p>Use the proceeds for the things you need and want. For example: establishing a “rainy day”
                            fund for the unexpected, paying monthly bills, making home improvements, paying for health
                            care, covering the cost of in-home services, making a major purchase such as a new vehicle,
                            and more.</p>
                    </div>
                    <button class="collapsible">Can I use a reverse mortgage to purchase a home?</button>
                    <div class="content fast">
                        <p>Yes, with the HECM (Home Equity Conversion Mortgage) For Purchase loan, qualified borrowers
                            can use their loan proceeds to buy a home that better suits their needs and lifestyle. It’s
                            a home financing option that can make it easier for buyers age 62 and older to afford the
                            home they want, while preserving more of their savings.</p>
                    </div>
                    <button class="collapsible">Are interest rates fixed or variable?</button>
                    <div class="content fast">
                        <p>Reverse mortgages are available with either fixed or variable rates. Borrowers who elect a
                            fixed-rate loan will receive their funds as a single disbursement lump sum. A lump sum
                            disbursement is also available with an adjustable rate. A line of credit and monthly
                            advances have an adjustable rate.</p>
                    </div>
                    <button class="collapsible">Can a reverse mortgage be refinanced?</button>
                    <div class="content fast">
                        <p>Yes, refinancing is possible. This option may be to your advantage if your home increases in
                            value, making more funds available.</p>
                    </div>
                    <button class="collapsible">Will I have to pay any fees?</button>
                    <div class="content fast">
                        <p>With the exception of a fee for government-required reverse mortgage counseling, most of the
                            fees associated with a reverse mortgage can be financed with your loan, so there’s no
                            immediate out-of-pocket cost. The costs are added to the loan amount (“principal”) and paid
                            along with the accrued interest when the loan becomes due. Depending on the loan option you
                            choose, these fees may include an origination fee, closing costs, a mortgage insurance
                            premium (required for HECM loans) and a monthly servicing fee. Ask us about our “Low-Cost
                            HECM” pricing option, which eliminates nearly all origination and closing costs.</p>
                    </div>
                    <button class="collapsible">What has to be repaid when the loan becomes due?</button>
                    <div class="content fast">
                        <p>You’ll repay the loan balance, any fees that have been added, and the accrued interest.
                            Homeowners (or their heirs) usually choose to do this through the sale of the home or other
                            assets. Repaying the loan by refinancing through a conventional mortgage is also an option.
                        </p>
                    </div>
                    <button class="collapsible">When will the principal and interest charges become due?</button>
                    <div class="content fast">
                        <p>The loan must be paid in full when one of the following occurs:
                            <ul>
                                <li>A “maturity event” - the loan becomes due and payable when the home is sold, or the
                                    borrower or non-borrowing spouse meeting certain criteria no longer occupies the
                                    home as their principal residence (i.e., passes away, moves out, or vacates the
                                    property for more than 12 months).</li>
                                <li>You fail to pay property taxes or homeowners insurance.</li>
                                <li>You let the property deteriorate beyond what is considered reasonable wear and tear,
                                    and do not correct the problem.</li>
                            </ul>
                        </p>
                    </div>
                    <button class="collapsible">What if one of the co-borrowers passes away or must move out for health
                        reasons?</button>
                    <div class="content fast">
                        <p>The other borrower continues to own and live in the home — and enjoy all the benefits of
                            their reverse mortgage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/footer.php'); ?>
    <script src="javascript/reverse-mortgage-Ob.js" async></script>
</body>

</html>
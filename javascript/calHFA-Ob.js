var _$_f657=["CalHFA FHA","Los Angeles","CalPLUS FHA with 2% ZIP","CalPLUS FHA with 3% ZIP","CalHFA Conventional","CalPLUS Conventional with 2% ZIP","CalPLUS Conventional with 3% ZIP","San Bernardino","CalHFA_FHA","others","MyHome","School Program","None","collapsible","getElementsByClassName","flyers","getElementById","length","click","content","maxHeight","style","active","contains","classList","remove","toggle","nextElementSibling","scrollHeight","px","addEventListener","value","county","purchase-price","innerHTML","Purchase-Price","toLocaleString","Purchase-Price-2","Closing-Costs","Closing-Costs-2","property-type","loan-program","Loan-Program","loan_limit","loan","find","down_payment","zip","VA","mi","MI%","subordinate-loan","Subordinate-Loan","second_loan_percent","dpa_program","second-loan-amount","tabcontent","subordinate-loans","display","none","block","expected-interest-rate","Expected-Interest-Rate","toFixed","high-balance-fee-rate","High-Balance-Fee-Rate","high-balance-loan","high-balance-fee","upfront","first-loan","pow","Principal-Interest","Property-Tax","Mortgage-Insurance","Homeowner-Insurance","Total-Housing-Expenses","zip-loan","total-loan","total-cost","LTV","CLTV","buyer-contribution","zip_credit","ZIP_Credit","High-Balance-Fee","widget-slide","calHFA-Widget","hide","#","slow","slideDown","scrollIntoView"];const counties=[{loan:_$_f657[0],county:_$_f657[1],loan_limit:726525,down_payment:0.035,zip:0.00},{loan:_$_f657[2],county:_$_f657[1],loan_limit:726525,down_payment:0.035,zip:0.02},{loan:_$_f657[3],county:_$_f657[1],loan_limit:726525,down_payment:0.035,zip:0.03},{loan:_$_f657[4],county:_$_f657[1],loan_limit:726525,down_payment:0.03,zip:0.00},{loan:_$_f657[5],county:_$_f657[1],loan_limit:726525,down_payment:0.03,zip:0.02},{loan:_$_f657[6],county:_$_f657[1],loan_limit:726525,down_payment:0.03,zip:0.03},{loan:_$_f657[0],county:_$_f657[7],loan_limit:431250,down_payment:0.035,zip:0.00},{loan:_$_f657[2],county:_$_f657[7],loan_limit:431250,down_payment:0.035,zip:0.02},{loan:_$_f657[3],county:_$_f657[7],loan_limit:431250,down_payment:0.035,zip:0.03},{loan:_$_f657[4],county:_$_f657[7],loan_limit:484350,down_payment:0.03,zip:0.00},{loan:_$_f657[5],county:_$_f657[7],loan_limit:484350,down_payment:0.03,zip:0.02},{loan:_$_f657[6],county:_$_f657[7],loan_limit:484350,down_payment:0.03,zip:0.03},{loan:_$_f657[8],county:_$_f657[9],loan_limit:431250,down_payment:0.035,zip:0.00},{loan:_$_f657[2],county:_$_f657[9],loan_limit:431250,down_payment:0.035,zip:0.02},{loan:_$_f657[3],county:_$_f657[9],loan_limit:431250,down_payment:0.035,zip:0.03},{loan:_$_f657[4],county:_$_f657[9],loan_limit:484350,down_payment:0.03,zip:0.00},{loan:_$_f657[5],county:_$_f657[9],loan_limit:484350,down_payment:0.03,zip:0.02},{loan:_$_f657[6],county:_$_f657[9],loan_limit:484350,down_payment:0.03,zip:0.03}];const dpas=[{dpa_program:_$_f657[10],second_loan_percent:0.035},{dpa_program:_$_f657[11],second_loan_percent:0.04},{dpa_program:_$_f657[12],second_loan_percent:0}];var flyers=document[_$_f657[16]](_$_f657[15])[_$_f657[14]](_$_f657[13]);for(var i=0;i< flyers[_$_f657[17]];i++){flyers[i][_$_f657[30]](_$_f657[18],function(){var _0x14261=document[_$_f657[16]](_$_f657[15])[_$_f657[14]](_$_f657[19]);for(var _0x1429B=0;_0x1429B< _0x14261[_$_f657[17]];_0x1429B++){_0x14261[_0x1429B][_$_f657[21]][_$_f657[20]]= null};if(this[_$_f657[24]][_$_f657[23]](_$_f657[22])){this[_$_f657[24]][_$_f657[25]](_$_f657[22])}else {for(var _0x142D5=0;_0x142D5< flyers[_$_f657[17]];_0x142D5++){flyers[_0x142D5][_$_f657[24]][_$_f657[25]](_$_f657[22])};this[_$_f657[24]][_$_f657[26]](_$_f657[22]);var _0x14227=this[_$_f657[27]];_0x14227[_$_f657[21]][_$_f657[20]]= _0x14227[_$_f657[28]]+ _$_f657[29]}})};calc();function calc(){county= document[_$_f657[16]](_$_f657[32])[_$_f657[31]];purchase_price= Number(document[_$_f657[16]](_$_f657[33])[_$_f657[31]]);document[_$_f657[16]](_$_f657[35])[_$_f657[34]]= purchase_price[_$_f657[36]]();document[_$_f657[16]](_$_f657[37])[_$_f657[34]]= purchase_price[_$_f657[36]]();closing_costs= purchase_price* 0.02;document[_$_f657[16]](_$_f657[38])[_$_f657[34]]= closing_costs[_$_f657[36]]();document[_$_f657[16]](_$_f657[39])[_$_f657[34]]= closing_costs[_$_f657[36]]();property_type= document[_$_f657[16]](_$_f657[40])[_$_f657[31]];loan_program= document[_$_f657[16]](_$_f657[41])[_$_f657[31]];document[_$_f657[16]](_$_f657[42])[_$_f657[34]]= loan_program;loan_limit= counties[_$_f657[45]]((_0x143BD)=>_0x143BD[_$_f657[44]]=== loan_program&& _0x143BD[_$_f657[32]]=== county)[_$_f657[43]];down_payment= counties[_$_f657[45]]((_0x143F7)=>_0x143F7[_$_f657[44]]=== loan_program)[_$_f657[46]];zip= counties[_$_f657[45]]((_0x14431)=>_0x14431[_$_f657[44]]=== loan_program)[_$_f657[47]];if(loan_program=== _$_f657[48]){mi_rate= 0}else {if(loan_program=== _$_f657[0]|| loan_program=== _$_f657[2]|| loan_program=== _$_f657[3]){mi_rate= 0.85}else {if(loan_program=== _$_f657[4]|| loan_program=== _$_f657[5]|| loan_program=== _$_f657[6]){mi_rate= Number(document[_$_f657[16]](_$_f657[49])[_$_f657[31]])}}};document[_$_f657[16]](_$_f657[50])[_$_f657[34]]= mi_rate[_$_f657[36]](undefined,{minimumFractionDigits:2,maximumFractionDigits:2});subordinate_loan= document[_$_f657[16]](_$_f657[51])[_$_f657[31]];document[_$_f657[16]](_$_f657[52])[_$_f657[34]]= subordinate_loan;dpa= dpas[_$_f657[45]]((_0x1446B)=>_0x1446B[_$_f657[54]]=== subordinate_loan)[_$_f657[53]];second_loan_amount= purchase_price* dpa;document[_$_f657[16]](_$_f657[55])[_$_f657[34]]= second_loan_amount[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0});var i,_0x14383;var _0x14383=document[_$_f657[16]](_$_f657[57])[_$_f657[14]](_$_f657[56]);for(i= 0;i< _0x14383[_$_f657[17]];i++){_0x14383[i][_$_f657[21]][_$_f657[58]]= _$_f657[59]};document[_$_f657[16]](subordinate_loan)[_$_f657[21]][_$_f657[58]]= _$_f657[60];interest_rate= Number(document[_$_f657[16]](_$_f657[61])[_$_f657[31]]);document[_$_f657[16]](_$_f657[62])[_$_f657[34]]= interest_rate[_$_f657[63]](3);high_balance_fee_rate= Number(document[_$_f657[16]](_$_f657[64])[_$_f657[31]]);document[_$_f657[16]](_$_f657[65])[_$_f657[34]]= high_balance_fee_rate[_$_f657[63]](3);base_loan= purchase_price* (1- down_payment);if(base_loan> loan_limit){base_loan= loan_limit};if(base_loan> 484350){document[_$_f657[16]](_$_f657[66])[_$_f657[21]][_$_f657[58]]= _$_f657[60];document[_$_f657[16]](_$_f657[67])[_$_f657[21]][_$_f657[58]]= _$_f657[60];calc_high_balance_fee()}else {document[_$_f657[16]](_$_f657[66])[_$_f657[21]][_$_f657[58]]= _$_f657[59];document[_$_f657[16]](_$_f657[67])[_$_f657[21]][_$_f657[58]]= _$_f657[59];high_balance_fee= 0};if(loan_program=== _$_f657[0]|| loan_program=== _$_f657[2]|| loan_program=== _$_f657[3]){upfront_mip= base_loan* 0.0175}else {upfront_mip= 0};document[_$_f657[16]](_$_f657[68])[_$_f657[34]]= upfront_mip[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0});total_first_loan= base_loan+ upfront_mip;document[_$_f657[16]](_$_f657[69])[_$_f657[34]]= total_first_loan[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0});var _0x1430F=360;var _0x14349=interest_rate/ 1200;loan_amount= total_first_loan;principal_interest= loan_amount* _0x14349/ (1- (Math[_$_f657[70]](1/ (1+ _0x14349),_0x1430F)));document[_$_f657[16]](_$_f657[71])[_$_f657[34]]= principal_interest[_$_f657[36]](undefined,{minimumFractionDigits:2,maximumFractionDigits:2});property_tax_rate= 0.0125;property_tax= (property_tax_rate* purchase_price)/ 12;document[_$_f657[16]](_$_f657[72])[_$_f657[34]]= property_tax[_$_f657[36]](undefined,{minimumFractionDigits:2,maximumFractionDigits:2});mortgage_insurance= ((mi_rate* loan_amount)/ 1200);document[_$_f657[16]](_$_f657[73])[_$_f657[34]]= mortgage_insurance[_$_f657[36]](undefined,{minimumFractionDigits:2,maximumFractionDigits:2});homeowner_insurance= (purchase_price* 0.0025)/ 12;document[_$_f657[16]](_$_f657[74])[_$_f657[34]]= homeowner_insurance[_$_f657[36]](undefined,{minimumFractionDigits:2,maximumFractionDigits:2});housing_expense= principal_interest+ property_tax+ mortgage_insurance+ homeowner_insurance;document[_$_f657[16]](_$_f657[75])[_$_f657[34]]= housing_expense[_$_f657[36]](undefined,{minimumFractionDigits:2,maximumFractionDigits:2});zip_loan= total_first_loan* zip;document[_$_f657[16]](_$_f657[76])[_$_f657[34]]= zip_loan[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0});total_loan= total_first_loan+ second_loan_amount+ zip_loan;document[_$_f657[16]](_$_f657[77])[_$_f657[34]]= total_loan[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0});total_cost= purchase_price+ upfront_mip+ closing_costs+ high_balance_fee;document[_$_f657[16]](_$_f657[78])[_$_f657[34]]= total_cost[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0});loan_to_value= (base_loan/ purchase_price)* 100;document[_$_f657[16]](_$_f657[79])[_$_f657[34]]= loan_to_value[_$_f657[36]](undefined,{minimumFractionDigits:1,maximumFractionDigits:1});combined_loan_to_value= (total_loan/ purchase_price)* 100;document[_$_f657[16]](_$_f657[80])[_$_f657[34]]= combined_loan_to_value[_$_f657[36]](undefined,{minimumFractionDigits:1,maximumFractionDigits:1});buyer_contribution= total_cost- total_loan;if(buyer_contribution< 0){document[_$_f657[16]](_$_f657[81])[_$_f657[34]]= 0;zip_credit= -1* buyer_contribution;document[_$_f657[16]](_$_f657[82])[_$_f657[21]][_$_f657[58]]= _$_f657[60];document[_$_f657[16]](_$_f657[83])[_$_f657[34]]= zip_credit[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0})}else {document[_$_f657[16]](_$_f657[82])[_$_f657[21]][_$_f657[58]]= _$_f657[59];document[_$_f657[16]](_$_f657[81])[_$_f657[34]]= buyer_contribution[_$_f657[36]](undefined,{minimumFractionDigits:0,maximumFractionDigits:0})}}function calc_high_balance_fee(){high_balance_fee= base_loan* (high_balance_fee_rate/ 100);document[_$_f657[16]](_$_f657[84])[_$_f657[34]]= high_balance_fee[_$_f657[36]](undefined,{minimumFractionDigits:2,maximumFractionDigits:2})}function hide_calc_slides(){var _0x144A5=document[_$_f657[16]](_$_f657[86])[_$_f657[14]](_$_f657[85]);for(var i=0;i< _0x144A5[_$_f657[17]];i++){$(_0x144A5[i])[_$_f657[87]]()}}function show_slide(_0x14519){hide_calc_slides();var _0x144DF=_$_f657[88]+ _0x14519;$(_0x144DF)[_$_f657[90]](_$_f657[89]);document[_$_f657[16]](_$_f657[86])[_$_f657[91]]();calc()}
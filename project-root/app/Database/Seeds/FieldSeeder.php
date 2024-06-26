<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FieldSeeder extends Seeder
{

    public function run()
    {
        $formData = [
            ['FieldID' => 2036, 'FieldType' => 'title', 'LabelText' => 'Form 1040', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2037, 'FieldType' => 'title', 'LabelText' => 'Filing Status (Check only one box.)', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2038, 'FieldType' => 'checkbox', 'LabelText' => 'Single', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2039, 'FieldType' => 'checkbox', 'LabelText' => 'Married filing jointly', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2040, 'FieldType' => 'checkbox', 'LabelText' => 'Married filing separately', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2041, 'FieldType' => 'checkbox', 'LabelText' => 'Head of Household (HOH)', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2042, 'FieldType' => 'checkbox', 'LabelText' => 'Qualifying surviving spouse', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2043, 'FieldType' => 'textBox', 'LabelText' => 'Your first name and middle initial', 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2044, 'FieldType' => 'textBox', 'LabelText' => 'Last name', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2045, 'FieldType' => 'textBox', 'LabelText' => 'Your social security number', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2046, 'FieldType' => 'textBox', 'LabelText' => 'If joint return, spouse\'s first name and middle initial', 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2047, 'FieldType' => 'textBox', 'LabelText' => 'Last name', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2048, 'FieldType' => 'textBox', 'LabelText' => 'Spouse\'s social security number', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2049, 'FieldType' => 'textBox', 'LabelText' => 'Home Address (number and street). If you have a P.O. box, see instructions.', 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2050, 'FieldType' => 'textBox', 'LabelText' => 'Apt. no.', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2051, 'FieldType' => 'textBox', 'LabelText' => 'City, town or post office. If you have a foreign address, also complete spaces below.', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2052, 'FieldType' => 'textBox', 'LabelText' => 'State', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2053, 'FieldType' => 'textBox', 'LabelText' => 'Zip code', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2054, 'FieldType' => 'textBox', 'LabelText' => 'Foreign country name', 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2055, 'FieldType' => 'textBox', 'LabelText' => 'Foreign province/state/county', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2056, 'FieldType' => 'textBox', 'LabelText' => 'Foreign postal code', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2057, 'FieldType' => 'text', 'LabelText' => 'Presidential Election Campaign (Check if you, or your spouse if filing jointly, want $3 to go to this fund. Checking a box below will not change your tax or refund.)', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2058, 'FieldType' => 'checkbox', 'LabelText' => 'You', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2059, 'FieldType' => 'checkbox', 'LabelText' => 'Spouse', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2060, 'FieldType' => 'title', 'LabelText' => 'Digital Assets', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2061, 'FieldType' => 'text', 'LabelText' => 'At any time during 2022, did you: (a) receive (as a reward, award, or payment for property or services); or (b) sell, exchange, gift, or otherwise dispose of a digital asset (or a financial interest in a digital asset)? (See instructions.)', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2062, 'FieldType' => 'checkbox', 'LabelText' => 'Yes', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2063, 'FieldType' => 'checkbox', 'LabelText' => 'No', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2064, 'FieldType' => 'title', 'LabelText' => 'Standard Deduction', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2065, 'FieldType' => 'text', 'LabelText' => 'Someone can claim:', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2066, 'FieldType' => 'checkbox', 'LabelText' => 'You as a dependent', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2067, 'FieldType' => 'checkbox', 'LabelText' => 'Your spouse as a dependent', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2068, 'FieldType' => 'checkbox', 'LabelText' => 'Spouse itemizes on a separate return or you were a dual-status alien', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2069, 'FieldType' => 'title', 'LabelText' => 'Age/Blindness', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2070, 'FieldType' => 'checkbox', 'LabelText' => 'You were born before January 2, 1958', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2071, 'FieldType' => 'checkbox', 'LabelText' => 'You are blind', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2072, 'FieldType' => 'checkbox', 'LabelText' => 'Spouse was born before January 2, 1958', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2073, 'FieldType' => 'checkbox', 'LabelText' => 'Spouse is blind', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2074, 'FieldType' => 'title', 'LabelText' => 'Dependents', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2075, 'FieldType' => 'checkbox', 'LabelText' => 'If more than four dependents, see instructions and check here', 'InputClass' => '', 'DivClass' => 'col-md-12', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2076, 'FieldType' => 'textBox', 'LabelText' => '(1) First name', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2077, 'FieldType' => 'textBox', 'LabelText' => 'Last name', 'InputClass' => '', 'DivClass' => 'col-md-1', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2078, 'FieldType' => 'textBox', 'LabelText' => '(2) Social security number', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2079, 'FieldType' => 'textBox', 'LabelText' => '(3) Relationship to you', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2080, 'FieldType' => 'checkbox', 'LabelText' => 'Qualifies for child tax credit', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2081, 'FieldType' => 'checkbox', 'LabelText' => 'Qualifies for credit for other dependents', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2082, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2083, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-1', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2084, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2085, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2086, 'FieldType' => 'checkbox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2087, 'FieldType' => 'checkbox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2088, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2089, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-1', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2090, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2091, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2092, 'FieldType' => 'checkbox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2093, 'FieldType' => 'checkbox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2094, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2095, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-1', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2096, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2097, 'FieldType' => 'textBox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2098, 'FieldType' => 'checkbox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2099, 'FieldType' => 'checkbox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2100, 'FieldType' => 'title', 'LabelText' => 'Income', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2101, 'FieldType' => 'text', 'LabelText' => 'Attach Form(s) W-2 here. Also attach Forms W-2G and 1099-R if tax was withheld. If you did not get a Form W-2, see instructions.', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2102, 'FieldType' => 'textBox', 'LabelText' => '1a) Total amount from Form(s) W-2, box 1 (see instructions)', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2103, 'FieldType' => 'textBox', 'LabelText' => '1b) Household employee wages not reported on Form(s) W-2', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2104, 'FieldType' => 'textBox', 'LabelText' => '1c) Tip income not reported on line 1a (see instructions)', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2105, 'FieldType' => 'textBox', 'LabelText' => '1d) Medicaid waiver payments not reported on Form(s) W-2 (see instructions)', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2106, 'FieldType' => 'textBox', 'LabelText' => '1e) Taxable dependent care benefits from Form 2441, line 26', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2107, 'FieldType' => 'textBox', 'LabelText' => '1f) Employer-provided adoption benefits from Form 8839, line 29', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2108, 'FieldType' => 'textBox', 'LabelText' => '1g) Wages from Form 8919, line 6', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2109, 'FieldType' => 'textBox', 'LabelText' => '1h) Other earned income (see instructions)', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2110, 'FieldType' => 'textBox', 'LabelText' => '1i) Nontaxable combat pay election (see instructions)', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2111, 'FieldType' => 'textBox', 'LabelText' => '1z) Add lines 1a through 1h', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2112, 'FieldType' => 'textBox', 'LabelText' => '2a) Tax-exempt interest (Attach Sch. B if required)', 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2113, 'FieldType' => 'textBox', 'LabelText' => '2b) Taxable interest', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2114, 'FieldType' => 'textBox', 'LabelText' => '3a) Qualified dividends (Attach Sch. B if required)', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2115, 'FieldType' => 'textBox', 'LabelText' => '3b) Ordinary dividends', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2116, 'FieldType' => 'textBox', 'LabelText' => '4a) IRA distributions', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2117, 'FieldType' => 'textBox', 'LabelText' => '4b) Taxable amount', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2118, 'FieldType' => 'textBox', 'LabelText' => '5a) Pensions and annuities', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2119, 'FieldType' => 'textBox', 'LabelText' => '5b) Taxable amount', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2120, 'FieldType' => 'textBox', 'LabelText' => '6a) Social security benefits', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2121, 'FieldType' => 'textBox', 'LabelText' => '6b) Taxable amount', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2122, 'FieldType' => 'checkbox', 'LabelText' => '6c) If you elect to use the lump-sum election method, check here (see instructions)', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2123, 'FieldType' => 'textBox', 'LabelText' => '7) Capital gain or (loss). Attach Schedule D if required.', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2124, 'FieldType' => 'checkbox', 'LabelText' => 'If not required, check here', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2125, 'FieldType' => 'textBox', 'LabelText' => '8) Other income from Schedule 1, line 10', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2126, 'FieldType' => 'textBox', 'LabelText' => '9) Add lines 1z, 2b, 3b, 4b, 5b, 6b, 7, and 8. This is your total income', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2127, 'FieldType' => 'textBox', 'LabelText' => '10) Adjustments to income from Schedule 1, line 26', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2128, 'FieldType' => 'textBox', 'LabelText' => '11) Subtract line 10 from line 9. This is your adjusted gross income', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2129, 'FieldType' => 'textBox', 'LabelText' => '12) Standard deduction or itemized deductions (from Schedule A)', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2130, 'FieldType' => 'text', 'LabelText' => 'Standard Deduction for: • Single or Married filing separately, $12,950 • Married filing jointly or Qualifying surviving spouse, $25,900 • Head of household, $19,400 • If you checked any box under Standard Deduction, see instructions.', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2131, 'FieldType' => 'textBox', 'LabelText' => '13) Qualified business income deduction from Form 8995 or Form 8995-A', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2132, 'FieldType' => 'textBox', 'LabelText' => '14) Add lines 12 and 13', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2133, 'FieldType' => 'textBox', 'LabelText' => '15) Subtract line 14 from line 11. If zero or less, enter -0-. This is your taxable income', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2134, 'FieldType' => 'title', 'LabelText' => 'Tax and Credits', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2135, 'FieldType' => 'textBox', 'LabelText' => '16) Tax (see instructions). Check if any from Form(s):', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2136, 'FieldType' => 'checkbox', 'LabelText' => '8814', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2137, 'FieldType' => 'checkbox', 'LabelText' => '4972', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2138, 'FieldType' => 'textBox', 'LabelText' => 'Form number', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2139, 'FieldType' => 'checkbox', 'LabelText' => '', 'InputClass' => '', 'DivClass' => 'col-md-1', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2140, 'FieldType' => 'textBox', 'LabelText' => '17) Amount from Schedule 2, line 3', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2141, 'FieldType' => 'textBox', 'LabelText' => '18) Add lines 16 and 17', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2142, 'FieldType' => 'textBox', 'LabelText' => '19) Child tax credit or credit for other dependents from Schedule 8812', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2143, 'FieldType' => 'textBox', 'LabelText' => '20) Amount from Schedule 3, line 8', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2144, 'FieldType' => 'textBox', 'LabelText' => '21) Add lines 19 and 20', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2145, 'FieldType' => 'textBox', 'LabelText' => '22) Subtract line 21 from line 18. If zero or less, enter -0-', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2146, 'FieldType' => 'textBox', 'LabelText' => '23) Other taxes, including self-employment tax, from Schedule 2, line 21', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2147, 'FieldType' => 'textBox', 'LabelText' => '24) Add lines 22 and 23. This is your total tax', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2148, 'FieldType' => 'title', 'LabelText' => 'Payments', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2149, 'FieldType' => 'textBox', 'LabelText' => '25a) Federal income tax withheld from Form(s) W-2', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2150, 'FieldType' => 'textBox', 'LabelText' => '25b) Federal income tax withheld from Form(s) 1099', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2151, 'FieldType' => 'textBox', 'LabelText' => '25c) Federal income tax withheld from other forms (see instructions)', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2152, 'FieldType' => 'textBox', 'LabelText' => '25d) Add lines 25a through 25c', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2153, 'FieldType' => 'textBox', 'LabelText' => '26) 2022 estimated tax payments and amount applied from 2021 return', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2154, 'FieldType' => 'textBox', 'LabelText' => '27) Earned income credit (EIC) - If you have a qualifying child, attach Sch. EIC.', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2155, 'FieldType' => 'textBox', 'LabelText' => '28) Additional child tax credit from Schedule 8812', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2156, 'FieldType' => 'textBox', 'LabelText' => '29) American opportunity credit from Form 8863, line 8', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2157, 'FieldType' => 'textBox', 'LabelText' => '30) Reserved for future use', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2158, 'FieldType' => 'textBox', 'LabelText' => '31) Amount from Schedule 3, line 15', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2159, 'FieldType' => 'textBox', 'LabelText' => '32) Add lines 27, 28, 29, and 31. These are your total other payments and refundable credits', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2160, 'FieldType' => 'textBox', 'LabelText' => '33) Add lines 25d, 26, and 32. These are your total payments', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2161, 'FieldType' => 'title', 'LabelText' => 'Refund', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2162, 'FieldType' => 'text', 'LabelText' => 'Direct deposit? See instructions.', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2163, 'FieldType' => 'textBox', 'LabelText' => '34) If line 33 is more than line 24, subtract line 24 from line 33. This is the amount you overpaid', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2164, 'FieldType' => 'textBox', 'LabelText' => '35a) Amount of line 34 you want refunded to you', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2165, 'FieldType' => 'checkbox', 'LabelText' => 'If Form 8888 is attached, check here', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2166, 'FieldType' => 'textBox', 'LabelText' => '35b) Routing number', 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2167, 'FieldType' => 'checkbox', 'LabelText' => '35c) Type: Checking', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2168, 'FieldType' => 'checkbox', 'LabelText' => 'Type: Savings', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2169, 'FieldType' => 'textBox', 'LabelText' => '35d) Account number', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2170, 'FieldType' => 'textBox', 'LabelText' => '36) Amount of line 34 you want applied to your 2023 estimated tax', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2171, 'FieldType' => 'text', 'LabelText' => 'Amount You Owe', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2172, 'FieldType' => 'textBox', 'LabelText' => '37) If line 24 is more than line 33, subtract line 33 from line 24. This is the amount you owe', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2173, 'FieldType' => 'title', 'LabelText' => 'Sign Here', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2174, 'FieldType' => 'textBox', 'LabelText' => 'Your signature', 'InputClass' => '', 'DivClass' => 'col-md-8', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2175, 'FieldType' => 'date', 'LabelText' => 'Date', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2176, 'FieldType' => 'checkbox', 'LabelText' => 'Yes. Complete below.', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2177, 'FieldType' => 'checkbox', 'LabelText' => 'No', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2178, 'FieldType' => 'textBox', 'LabelText' => "Designee's name", 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2179, 'FieldType' => 'textBox', 'LabelText' => 'Phone no.', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2180, 'FieldType' => 'textBox', 'LabelText' => 'Personal identification number (PIN)', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2181, 'FieldType' => 'title', 'LabelText' => 'Sign Here', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2182, 'FieldType' => 'text', 'LabelText' => 'Joint return? See instructions. Keep a copy for your records.', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2183, 'FieldType' => 'text', 'LabelText' => 'Under penalties of perjury, I declare that I have examined this return and accompanying schedules and statements, and to the best of my knowledge and belief, they are true, correct, and complete. Declaration of preparer (other than taxpayer) is based on a', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2184, 'FieldType' => 'textBox', 'LabelText' => 'Your signature', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2185, 'FieldType' => 'textBox', 'LabelText' => 'Date', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2186, 'FieldType' => 'textBox', 'LabelText' => 'Your occupation', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2187, 'FieldType' => 'textBox', 'LabelText' => 'If the IRS sent you an Identity Protection PIN, enter it here (see inst.)', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2188, 'FieldType' => 'textBox', 'LabelText' => "Spouse's signature. If a joint return, both must sign.", 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2189, 'FieldType' => 'textBox', 'LabelText' => 'Date', 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2190, 'FieldType' => 'textBox', 'LabelText' => "Spouse's occupation", 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2191, 'FieldType' => 'textBox', 'LabelText' => 'If the IRS sent you an Identity Protection PIN, enter it here (see inst.)', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2192, 'FieldType' => 'textBox', 'LabelText' => 'Phone no.', 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2193, 'FieldType' => 'textBox', 'LabelText' => 'Email address', 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2194, 'FieldType' => 'title', 'LabelText' => 'Paid Preparer Use Only', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2195, 'FieldType' => 'textBox', 'LabelText' => "Preparer's name", 'InputClass' => '', 'DivClass' => 'col-md-3', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2196, 'FieldType' => 'textBox', 'LabelText' => "Preparer's signature", 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2197, 'FieldType' => 'textBox', 'LabelText' => 'Date', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2198, 'FieldType' => 'textBox', 'LabelText' => 'PTIN', 'InputClass' => '', 'DivClass' => 'col-md-2', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2199, 'FieldType' => 'checkbox', 'LabelText' => 'Self-employed', 'InputClass' => '', 'DivClass' => 'col-md-1', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2200, 'FieldType' => 'textBox', 'LabelText' => "Firm's name", 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2201, 'FieldType' => 'textBox', 'LabelText' => "Phone no.", 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2202, 'FieldType' => 'textBox', 'LabelText' => "Firm's address", 'InputClass' => '', 'DivClass' => 'col-md-6', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2203, 'FieldType' => 'textBox', 'LabelText' => "Firm's EIN", 'InputClass' => '', 'DivClass' => 'col-md-4', 'UserID' => 1, 'FormID' => 1],
            ['FieldID' => 2204, 'FieldType' => 'formName', 'LabelText' => 'Individual Income Tax Return (f1040)', 'InputClass' => '', 'DivClass' => '', 'UserID' => 1, 'FormID' => 1],
        ];
        // Insert the data into the 'fields' table
        $this->db->table('form_fields')->insertBatch($formData);
    }
}
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'date' => "2023-05-28",
                'headline' => "Stock Market Hits All-Time High",
                'content' => "In a remarkable surge, the stock market reached an all-time high today, driven by strong investor confidence and positive economic indicators. Market analysts attribute this milestone to robust corporate earnings, low interest rates, and optimism surrounding global trade. The bullish sentiment has attracted a wave of investments from both institutional and individual investors, propelling major indices to new record levels. Despite concerns over inflation and geopolitical tensions, market participants remain optimistic about the long-term growth prospects of the stock market. However, experts caution that a healthy dose of caution is necessary, as market volatility may increase in the coming months. It is essential for investors to stay informed, diversify their portfolios, and closely monitor market developments to make well-informed investment decisions."
            ],
            [
                'date' => "2023-05-29",
                'headline' => "Federal Reserve Announces Interest Rate Cut",
                'content' => "The Federal Reserve has decided to lower interest rates by 0.25% in a move aimed at stimulating economic growth and bolstering investment activities. This decision comes in response to the prevailing economic conditions, including moderate inflation and concerns about the pace of economic recovery. The central bank hopes that lower interest rates will encourage borrowing and spur consumer spending, thus boosting economic activity. However, some experts caution that reducing interest rates may have unintended consequences, such as contributing to asset price inflation or creating risks in the financial system. As with any monetary policy decision, the long-term impact remains uncertain. It is important for individuals and businesses to carefully assess their financial goals and adapt their strategies accordingly, taking into account the changing interest rate environment and associated risks."
            ],
            [
                'date' => "2023-05-30",
                'headline' => "Global Tech Giants Report Strong Q1 Earnings",
                'content' => "Leading technology companies such as Apple, Google, and Microsoft have posted impressive first-quarter earnings, surpassing market expectations and signaling a robust tech sector. These tech giants reported significant revenue growth driven by strong sales of their flagship products and services. Apple's latest iPhone release exceeded sales projections, while Google's advertising revenue soared due to increased online activity. Microsoft experienced solid demand for its cloud computing services, contributing to its strong financial performance. The stellar earnings reports from these tech behemoths have not only propelled their stock prices but also boosted market sentiment towards the broader technology sector. Investors are closely monitoring the sector's continued innovation and the potential for disruptive technologies to reshape various industries."
            ],
            [
                'date' => "2023-05-31",
                'headline' => "Oil Prices Surge Amid Supply Constraints",
                'content' => "Crude oil prices soared today as concerns over supply disruptions in major oil-producing regions intensified, raising fears of potential energy shortages in the coming months. Ongoing geopolitical tensions and production challenges have led to a tightening global supply-demand balance. The Organization of the Petroleum Exporting Countries and its allies (OPEC+) have implemented production cuts to support prices, but unexpected disruptions in key oil-producing countries have further strained supply. Investors and market participants are closely monitoring developments in regions such as the Middle East, where conflicts and political uncertainties can impact oil production and distribution. The sharp increase in oil prices has implications for various sectors, including transportation, manufacturing, and consumer prices. Businesses and consumers alike may need to navigate potential cost pressures and volatility in energy markets."
            ],
            [
                'date' => "2023-06-01",
                'headline' => "Cryptocurrency Market Volatility Continues",
                'content' => "The cryptocurrency market experienced heightened volatility, with Bitcoin and other major digital currencies witnessing significant price swings amidst ongoing regulatory discussions and market uncertainties. Cryptocurrencies, which gained mainstream attention for their potential as decentralized digital assets, have been subject to increased scrutiny by regulators worldwide. Concerns over investor protection, market manipulation, and financial stability have prompted discussions on implementing stricter regulations for cryptocurrencies. These discussions, combined with market sentiments and investor behavior, have contributed to the price volatility observed in the cryptocurrency market. Investors and enthusiasts are advised to exercise caution and conduct thorough research before engaging in cryptocurrency investments. As the market continues to evolve, regulatory developments and technological advancements will shape the future of cryptocurrencies and their wider adoption in various sectors of the economy."
            ]
            ];

    
            // Simple Queries
            // $this->db->query('INSERT INTO email (sender, recipient, sub, body) VALUES(:sender:, :recipient:, :sub:, :body:)', $data);
    
            // Using Query Builder
            $this->db->table('newsrecords')->insert($data);
    }
}
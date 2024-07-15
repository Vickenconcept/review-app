import puppeteer from 'puppeteer';

(async () => {
    try {
        const searchValue = process.argv[2];
        console.log(`Searching for: ${searchValue}`);

        const browser = await puppeteer.launch({ headless: true });
        const page = await browser.newPage();

        await page.setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
        
        await page.goto(`https://www.g2.com/search?utf8=%E2%9C%93&query=${encodeURIComponent(searchValue)}`, { waitUntil: 'networkidle2' });
        // await page.goto(`https://www.capterra.com/search/?query=${searchValue}`, { waitUntil: 'networkidle2' });
        // await page.goto(`https://www.tripadvisor.com/Search?q=${searchValue}`, { waitUntil: 'networkidle2' });

        await page.waitForSelector('body', { timeout: 60000 });

        const content = await page.content();
        console.log(content);

        const urls = await page.$$eval('a', links =>
            links.map(link => link.href).filter(href => href.includes('/Attraction_Review'))
        );

        console.log(JSON.stringify(urls));
        await browser.close();
    } catch (error) {
        console.error('Error:', error);
    }
    
})();



// import puppeteer from 'puppeteer';
// import axios from 'axios';
// import fs from 'fs';

// // Replace with your 2Captcha API key
// const API_KEY = 'YOUR_2CAPTCHA_API_KEY';

// // Read proxies from file
// const proxies = fs.readFileSync('proxies.txt', 'utf-8').split('\n').filter(Boolean);

// const getRandomProxy = () => {
//     const randomIndex = Math.floor(Math.random() * proxies.length);
//     return proxies[randomIndex];
// };

// const solveCaptcha = async (siteKey, pageUrl) => {
//     try {
//         // Step 1: Submit captcha to 2Captcha
//         const response = await axios.post(`http://2captcha.com/in.php?key=${API_KEY}&method=userrecaptcha&googlekey=${siteKey}&pageurl=${pageUrl}`);
//         if (response.data.includes('ERROR')) {
//             throw new Error(response.data);
//         }

//         const captchaId = response.data.split('|')[1];

//         // Step 2: Wait for captcha to be solved
//         let captchaResult;
//         while (true) {
//             await new Promise(r => setTimeout(r, 20000)); // Wait for 20 seconds before polling
//             const resultResponse = await axios.get(`http://2captcha.com/res.php?key=${API_KEY}&action=get&id=${captchaId}`);
//             if (resultResponse.data === 'CAPCHA_NOT_READY') {
//                 continue;
//             } else if (resultResponse.data.includes('ERROR')) {
//                 throw new Error(resultResponse.data);
//             } else {
//                 captchaResult = resultResponse.data.split('|')[1];
//                 break;
//             }
//         }

//         return captchaResult;
//     } catch (error) {
//         console.error('Error solving captcha:', error);
//         throw error;
//     }
// };

// (async () => {
//     try {
//         const searchValue = process.argv[2];
//         console.log(`Searching for: ${searchValue}`);

//         const proxy = getRandomProxy();
//         console.log(`Using proxy: ${proxy}`);

//         const browser = await puppeteer.launch({
//             headless: true,
//             args: [`--proxy-server=${proxy}`]
//         });

//         const page = await browser.newPage();

//         // Set proxy credentials if necessary
//         // await page.authenticate({
//         //     username: 'proxy_username',
//         //     password: 'proxy_password'
//         // });

//         await page.setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

//         await page.goto(`https://www.tripadvisor.com/Search?q=${searchValue}`, { waitUntil: 'networkidle2' });

//         // Detect CAPTCHA
//         const captchaDetected = await page.evaluate(() => {
//             return !!document.querySelector('.g-recaptcha');
//         });

//         if (captchaDetected) {
//             console.log('CAPTCHA detected, solving...');

//             const siteKey = await page.evaluate(() => {
//                 return document.querySelector('.g-recaptcha').getAttribute('data-sitekey');
//             });

//             const captchaSolution = await solveCaptcha(siteKey, page.url());

//             await page.evaluate((captchaSolution) => {
//                 document.querySelector('#g-recaptcha-response').value = captchaSolution;
//                 document.querySelector('form').submit();
//             }, captchaSolution);

//             await page.waitForNavigation({ waitUntil: 'networkidle2' });
//         }

//         const content = await page.content();
//         console.log(content);

//         const urls = await page.$$eval('a', links =>
//             links.map(link => link.href).filter(href => href.includes('/Attraction_Review'))
//         );

//         console.log(JSON.stringify(urls));
//         await browser.close();
//     } catch (error) {
//         console.error('Error:', error);
//     }
// })();

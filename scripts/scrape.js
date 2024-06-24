import puppeteer from 'puppeteer';

(async () => {
    try {
        const searchValue = process.argv[2];
        console.log(`Searching for: ${searchValue}`);

        const browser = await puppeteer.launch({ headless: true });
        const page = await browser.newPage();

        // Set user agent to simulate a real browser
        await page.setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
        
        await page.goto(`https://www.capterra.com/search/?query=${searchValue}`, { waitUntil: 'networkidle2' });
        // await page.goto(`https://www.tripadvisor.com/Search?q=${searchValue}`, { waitUntil: 'networkidle2' });

        // Wait for some element that indicates the page is fully loaded
        await page.waitForSelector('body', { timeout: 60000 });

        // Debugging: Log the page content
        const content = await page.content();
        console.log(content);

        // Extract the URLs from search results
        const urls = await page.$$eval('a', links =>
            links.map(link => link.href).filter(href => href.includes('/Attraction_Review'))
        );

        console.log(JSON.stringify(urls));
        await browser.close();
    } catch (error) {
        console.error('Error:', error);
    }
})();

function SendRequest(url, method, headers, body) {
  return new Promise((a, b) => {
    fetch(url, { method, headers: { "User-Agent": `Official site, ${url}`, ...headers }, body: body ? body : undefined })
        .then(a)
        .catch(b);
  });
}


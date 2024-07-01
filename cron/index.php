<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cron</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<div id="contentContainer"></div>

<script>
    function fetchContent(url, containerId) {
        $.ajax({
            url: url,
            method: 'GET',
            success: function (data) {
                $('#' + containerId).append(data);
            },
            error: function () {
                console.error('cron çalışmadı.');
            }
        });
    }

    fetchContent('https://yourdomain.com/cron-job/investment', 'contentContainer');
    fetchContent('https://yourdomain.com/cron-job/referral', 'contentContainer');
    fetchContent('https://yourdomain.com/cron-job/user-ranking', 'contentContainer');

</script>
<script>
    setInterval(function() {
        location.reload();
    }, 10000);
</script>
</body>
</html>

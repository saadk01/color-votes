(function() {
    // Setting up index namespace
    var index = {
        /**
         * Namespace variable to keep count of visible votes.
         */
        totalVisibleVotes: 0,

        /**
         * Request API to provide colors and display them.
         */
        GetColors: function () {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "api/colors.php",
                statusCode: {
                    200: function (response) {
                        var colorsHtml = [];
                        $.each(response, function (key, obj) {
                            colorsHtml.push(
                                "<tr>" +
                                "<td>" +
                                    "<a href='javascript:void(0)' data-color_id='" + obj.id + "'>" +
                                        obj.name +
                                    "</a>" +
                                "</td>" +
                                "<td id='" + obj.id + "'></td>" +
                                "</tr>"
                            );
                        });
                        colorsHtml.push(
                            "<tr>" +
                                "<td style='font-weight: bold'>" +
                                    "<a href='javascript:void(0)' data-color_id='total'>Total</a>" +
                                "</td>" +
                                "<td id='total_count'></td>" +
                            "</tr>"
                        );

                        $('.colors_list').append(colorsHtml);
                    },
                    404: function (response) {
                        alert(response.responseText);
                    },
                    500: function (response) {
                        alert(response.responseText);
                    }
                }
            });
        },

        /**
         * Request API to provide total count of votes for the given color.
         *
         * @param colorId
         */
        FetchVotes: function (colorId) {
            if ('total' == colorId) {
                $('#total_count').html(index.totalVisibleVotes.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                return;
            }
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "api/votes.php?color_id=" + colorId,
                statusCode: {
                    200: function (response) {
                        $('#total_count').html('');

                        // Only add to the total count if a color's clicked for the first time
                        if ($('#'+colorId).is(':empty')){
                            index.totalVisibleVotes += parseInt(response.total_votes);
                        }

                        // Formatting ref: http://stackoverflow.com/a/2901298
                        $('#'+colorId).html(
                            response.total_votes.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                        );

                    },
                    404: function (response) {
                        alert(response.responseText);
                    },
                    500: function (response) {
                        alert(response.responseText);
                    }
                }
            });
        }
    };

    $(document).ready( function() {
        index.GetColors();
        $('.colors_list').on('click', 'a', function () {
            index.FetchVotes($(this).attr('data-color_id'));
        });
    });
})();


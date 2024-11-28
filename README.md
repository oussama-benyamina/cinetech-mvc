
```
cinetech_learning
├─ .htaccess
├─ composer.json
├─ composer.lock
├─ config
│  └─ db_connect.php
├─ index.php
├─ public
│  ├─ js
│  │  └─ main.js
│  └─ style.css
├─ sql
│  └─ cinetech(2).sql
├─ src
│  ├─ Container.php
│  ├─ Controllers
│  │  ├─ CommentController.php
│  │  ├─ ContactController.php
│  │  ├─ DetailsController.php
│  │  ├─ FavoritesController.php
│  │  ├─ HomeController.php
│  │  ├─ LoginController.php
│  │  ├─ LogoutController.php
│  │  ├─ ProfileController.php
│  │  ├─ SearchController.php
│  │  ├─ SeriesController.php
│  │  └─ SignupController.php
│  ├─ Models
│  │  ├─ Comment.php
│  │  ├─ Model.php
│  │  ├─ services
│  │  │  └─ Jikanapi.php
│  │  └─ User.php
│  ├─ Router.php
│  └─ Views
│     ├─ templates
│     │  ├─ Contact.php
│     │  ├─ details.php
│     │  ├─ Favorites.php
│     │  ├─ home.php
│     │  ├─ Login.php
│     │  ├─ Logout.php
│     │  ├─ partials
│     │  │  ├─ footer.php
│     │  │  ├─ head.php
│     │  │  └─ nav.php
│     │  ├─ Profile.php
│     │  ├─ search.php
│     │  ├─ Series.php
│     │  └─ Signup.php
│     └─ View.php
└─ vendor
   ├─ autoload.php
   ├─ bin
   │  ├─ yaml-lint
   │  └─ yaml-lint.bat
   ├─ clue
   │  └─ stream-filter
   │     ├─ CHANGELOG.md
   │     ├─ composer.json
   │     ├─ LICENSE
   │     ├─ README.md
   │     └─ src
   │        ├─ CallbackFilter.php
   │        ├─ functions.php
   │        └─ functions_include.php
   ├─ composer
   │  ├─ autoload_classmap.php
   │  ├─ autoload_files.php
   │  ├─ autoload_namespaces.php
   │  ├─ autoload_psr4.php
   │  ├─ autoload_real.php
   │  ├─ autoload_static.php
   │  ├─ ClassLoader.php
   │  ├─ installed.json
   │  ├─ installed.php
   │  ├─ InstalledVersions.php
   │  ├─ LICENSE
   │  ├─ platform_check.php
   │  ├─ tmp-03f9596e3f510258f8733e152fb9716d.zip
   │  ├─ tmp-12983ec0bf48a607ca111430fb818c4c.zip
   │  ├─ tmp-18f3f04aa980a9a0690391050444ca3c.zip
   │  ├─ tmp-2977ab3716b2fe94fd0f4ae810fb90b4.zip
   │  ├─ tmp-4ec103c4928f6f842e5bcf8ae99266a8.zip
   │  ├─ tmp-5a748653e7ccc35dfb828b51f3987ddc.zip
   │  ├─ tmp-72e436556427313c4fb36c196714c268.zip
   │  ├─ tmp-88a65c06c369395b94f00a5c0408b43e.zip
   │  ├─ tmp-8e1ccc3915787ab20c40b802e8c1b867.zip
   │  ├─ tmp-99132de8ad91883d1dc4dd66dc808f73.zip
   │  ├─ tmp-a296b3dbc27d9a22bf0646f865174b6f.zip
   │  ├─ tmp-aa3d967d63845125e51a568667768453.zip
   │  ├─ tmp-ac295b5ae0d25c25fca9c42b0b1d2114.zip
   │  ├─ tmp-b9b3ac0be6501d298c669cfddc2a2341.zip
   │  ├─ tmp-bfcab9d661ac54efb18fe4cd68530f43.zip
   │  ├─ tmp-c79ce71fbb7c690ce0bc6abaa59650fe.zip
   │  ├─ tmp-d2ecc1cf56e2eda63a45f270b421d3a7.zip
   │  ├─ tmp-da090fc7753509022390a16cb43ec81d.zip
   │  ├─ tmp-dbbe0d54b372bdd425ba3ff1e23dfb2b.zip
   │  ├─ tmp-dbeb99bc4c2cb60e8936ffc3fa5d4267.zip
   │  ├─ tmp-dec4233c6c8fb570dcc011a3f7ce4b01.zip
   │  ├─ tmp-e10f660f362a73ea3b4df4d4523b38e9.zip
   │  └─ tmp-fb2d0c1ae5c428853061534a336bc28b.zip
   ├─ guzzlehttp
   │  ├─ guzzle
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ src
   │  │  │  ├─ BodySummarizer.php
   │  │  │  ├─ BodySummarizerInterface.php
   │  │  │  ├─ Client.php
   │  │  │  ├─ ClientInterface.php
   │  │  │  ├─ ClientTrait.php
   │  │  │  ├─ Cookie
   │  │  │  │  ├─ CookieJar.php
   │  │  │  │  ├─ CookieJarInterface.php
   │  │  │  │  ├─ FileCookieJar.php
   │  │  │  │  ├─ SessionCookieJar.php
   │  │  │  │  └─ SetCookie.php
   │  │  │  ├─ Exception
   │  │  │  │  ├─ BadResponseException.php
   │  │  │  │  ├─ ClientException.php
   │  │  │  │  ├─ ConnectException.php
   │  │  │  │  ├─ GuzzleException.php
   │  │  │  │  ├─ InvalidArgumentException.php
   │  │  │  │  ├─ RequestException.php
   │  │  │  │  ├─ ServerException.php
   │  │  │  │  ├─ TooManyRedirectsException.php
   │  │  │  │  └─ TransferException.php
   │  │  │  ├─ functions.php
   │  │  │  ├─ functions_include.php
   │  │  │  ├─ Handler
   │  │  │  │  ├─ CurlFactory.php
   │  │  │  │  ├─ CurlFactoryInterface.php
   │  │  │  │  ├─ CurlHandler.php
   │  │  │  │  ├─ CurlMultiHandler.php
   │  │  │  │  ├─ EasyHandle.php
   │  │  │  │  ├─ HeaderProcessor.php
   │  │  │  │  ├─ MockHandler.php
   │  │  │  │  ├─ Proxy.php
   │  │  │  │  └─ StreamHandler.php
   │  │  │  ├─ HandlerStack.php
   │  │  │  ├─ MessageFormatter.php
   │  │  │  ├─ MessageFormatterInterface.php
   │  │  │  ├─ Middleware.php
   │  │  │  ├─ Pool.php
   │  │  │  ├─ PrepareBodyMiddleware.php
   │  │  │  ├─ RedirectMiddleware.php
   │  │  │  ├─ RequestOptions.php
   │  │  │  ├─ RetryMiddleware.php
   │  │  │  ├─ TransferStats.php
   │  │  │  └─ Utils.php
   │  │  └─ UPGRADING.md
   │  ├─ promises
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ AggregateException.php
   │  │     ├─ CancellationException.php
   │  │     ├─ Coroutine.php
   │  │     ├─ Create.php
   │  │     ├─ Each.php
   │  │     ├─ EachPromise.php
   │  │     ├─ FulfilledPromise.php
   │  │     ├─ Is.php
   │  │     ├─ Promise.php
   │  │     ├─ PromiseInterface.php
   │  │     ├─ PromisorInterface.php
   │  │     ├─ RejectedPromise.php
   │  │     ├─ RejectionException.php
   │  │     ├─ TaskQueue.php
   │  │     ├─ TaskQueueInterface.php
   │  │     └─ Utils.php
   │  └─ psr7
   │     ├─ CHANGELOG.md
   │     ├─ composer.json
   │     ├─ LICENSE
   │     ├─ README.md
   │     └─ src
   │        ├─ AppendStream.php
   │        ├─ BufferStream.php
   │        ├─ CachingStream.php
   │        ├─ DroppingStream.php
   │        ├─ Exception
   │        │  └─ MalformedUriException.php
   │        ├─ FnStream.php
   │        ├─ Header.php
   │        ├─ HttpFactory.php
   │        ├─ InflateStream.php
   │        ├─ LazyOpenStream.php
   │        ├─ LimitStream.php
   │        ├─ Message.php
   │        ├─ MessageTrait.php
   │        ├─ MimeType.php
   │        ├─ MultipartStream.php
   │        ├─ NoSeekStream.php
   │        ├─ PumpStream.php
   │        ├─ Query.php
   │        ├─ Request.php
   │        ├─ Response.php
   │        ├─ Rfc7230.php
   │        ├─ ServerRequest.php
   │        ├─ Stream.php
   │        ├─ StreamDecoratorTrait.php
   │        ├─ StreamWrapper.php
   │        ├─ UploadedFile.php
   │        ├─ Uri.php
   │        ├─ UriComparator.php
   │        ├─ UriNormalizer.php
   │        ├─ UriResolver.php
   │        └─ Utils.php
   ├─ jane-php
   │  ├─ json-schema-runtime
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ Reference.php
   │  └─ open-api-runtime
   │     ├─ Client
   │     │  ├─ AuthenticationPlugin.php
   │     │  ├─ CustomQueryResolver.php
   │     │  ├─ Exception
   │     │  │  └─ InvalidFetchModeException.php
   │     │  └─ Plugin
   │     │     └─ AuthenticationRegistry.php
   │     ├─ composer.json
   │     ├─ LICENSE
   │     └─ README.md
   ├─ jikan
   │  └─ jikan-php
   │     ├─ composer.json
   │     ├─ config
   │     │  ├─ .php-cs-fixer.dist.php
   │     │  ├─ jikan.php
   │     │  ├─ phpstan.neon
   │     │  └─ rector.php
   │     ├─ grumphp.yml
   │     ├─ LICENSE
   │     ├─ phpunit.xml
   │     ├─ README.md
   │     ├─ src
   │     │  ├─ Client.php
   │     │  ├─ Endpoint
   │     │  │  ├─ GetAnimeById.php
   │     │  │  ├─ GetAnimeCharacters.php
   │     │  │  ├─ GetAnimeEpisodeById.php
   │     │  │  ├─ GetAnimeEpisodes.php
   │     │  │  ├─ GetAnimeExternal.php
   │     │  │  ├─ GetAnimeForum.php
   │     │  │  ├─ GetAnimeFullById.php
   │     │  │  ├─ GetAnimeGenres.php
   │     │  │  ├─ GetAnimeMoreInfo.php
   │     │  │  ├─ GetAnimeNews.php
   │     │  │  ├─ GetAnimePictures.php
   │     │  │  ├─ GetAnimeRecommendations.php
   │     │  │  ├─ GetAnimeRelations.php
   │     │  │  ├─ GetAnimeReviews.php
   │     │  │  ├─ GetAnimeSearch.php
   │     │  │  ├─ GetAnimeStaff.php
   │     │  │  ├─ GetAnimeStatistics.php
   │     │  │  ├─ GetAnimeStreaming.php
   │     │  │  ├─ GetAnimeThemes.php
   │     │  │  ├─ GetAnimeUserUpdates.php
   │     │  │  ├─ GetAnimeVideos.php
   │     │  │  ├─ GetAnimeVideosEpisodes.php
   │     │  │  ├─ GetCharacterAnime.php
   │     │  │  ├─ GetCharacterById.php
   │     │  │  ├─ GetCharacterFullById.php
   │     │  │  ├─ GetCharacterManga.php
   │     │  │  ├─ GetCharacterPictures.php
   │     │  │  ├─ GetCharactersSearch.php
   │     │  │  ├─ GetCharacterVoiceActors.php
   │     │  │  ├─ GetClubMembers.php
   │     │  │  ├─ GetClubRelations.php
   │     │  │  ├─ GetClubsById.php
   │     │  │  ├─ GetClubsSearch.php
   │     │  │  ├─ GetClubStaff.php
   │     │  │  ├─ GetMagazines.php
   │     │  │  ├─ GetMangaById.php
   │     │  │  ├─ GetMangaCharacters.php
   │     │  │  ├─ GetMangaExternal.php
   │     │  │  ├─ GetMangaFullById.php
   │     │  │  ├─ GetMangaGenres.php
   │     │  │  ├─ GetMangaMoreInfo.php
   │     │  │  ├─ GetMangaNews.php
   │     │  │  ├─ GetMangaPictures.php
   │     │  │  ├─ GetMangaRecommendations.php
   │     │  │  ├─ GetMangaRelations.php
   │     │  │  ├─ GetMangaReviews.php
   │     │  │  ├─ GetMangaSearch.php
   │     │  │  ├─ GetMangaStatistics.php
   │     │  │  ├─ GetMangaTopics.php
   │     │  │  ├─ GetMangaUserUpdates.php
   │     │  │  ├─ GetPeopleSearch.php
   │     │  │  ├─ GetPersonAnime.php
   │     │  │  ├─ GetPersonById.php
   │     │  │  ├─ GetPersonFullById.php
   │     │  │  ├─ GetPersonManga.php
   │     │  │  ├─ GetPersonPictures.php
   │     │  │  ├─ GetPersonVoices.php
   │     │  │  ├─ GetProducerById.php
   │     │  │  ├─ GetProducerExternal.php
   │     │  │  ├─ GetProducerFullById.php
   │     │  │  ├─ GetProducers.php
   │     │  │  ├─ GetRandomAnime.php
   │     │  │  ├─ GetRandomCharacters.php
   │     │  │  ├─ GetRandomManga.php
   │     │  │  ├─ GetRandomPeople.php
   │     │  │  ├─ GetRandomUsers.php
   │     │  │  ├─ GetRecentAnimeRecommendations.php
   │     │  │  ├─ GetRecentAnimeReviews.php
   │     │  │  ├─ GetRecentMangaRecommendations.php
   │     │  │  ├─ GetRecentMangaReviews.php
   │     │  │  ├─ GetSchedules.php
   │     │  │  ├─ GetSeason.php
   │     │  │  ├─ GetSeasonNow.php
   │     │  │  ├─ GetSeasonsList.php
   │     │  │  ├─ GetSeasonUpcoming.php
   │     │  │  ├─ GetTopAnime.php
   │     │  │  ├─ GetTopCharacters.php
   │     │  │  ├─ GetTopManga.php
   │     │  │  ├─ GetTopPeople.php
   │     │  │  ├─ GetTopReviews.php
   │     │  │  ├─ GetUserAbout.php
   │     │  │  ├─ GetUserAnimelist.php
   │     │  │  ├─ GetUserById.php
   │     │  │  ├─ GetUserClubs.php
   │     │  │  ├─ GetUserExternal.php
   │     │  │  ├─ GetUserFavorites.php
   │     │  │  ├─ GetUserFriends.php
   │     │  │  ├─ GetUserFullProfile.php
   │     │  │  ├─ GetUserHistory.php
   │     │  │  ├─ GetUserMangaList.php
   │     │  │  ├─ GetUserProfile.php
   │     │  │  ├─ GetUserRecommendations.php
   │     │  │  ├─ GetUserReviews.php
   │     │  │  ├─ GetUsersSearch.php
   │     │  │  ├─ GetUserStatistics.php
   │     │  │  ├─ GetUserUpdates.php
   │     │  │  ├─ GetWatchPopularEpisodes.php
   │     │  │  ├─ GetWatchPopularPromos.php
   │     │  │  ├─ GetWatchRecentEpisodes.php
   │     │  │  └─ GetWatchRecentPromos.php
   │     │  ├─ Exception
   │     │  │  ├─ ApiException.php
   │     │  │  ├─ BadRequestException.php
   │     │  │  ├─ ClientException.php
   │     │  │  ├─ GetAnimeByIdBadRequestException.php
   │     │  │  ├─ GetAnimeCharactersBadRequestException.php
   │     │  │  ├─ GetAnimeEpisodeByIdBadRequestException.php
   │     │  │  ├─ GetAnimeEpisodesBadRequestException.php
   │     │  │  ├─ GetAnimeExternalBadRequestException.php
   │     │  │  ├─ GetAnimeForumBadRequestException.php
   │     │  │  ├─ GetAnimeFullByIdBadRequestException.php
   │     │  │  ├─ GetAnimeGenresBadRequestException.php
   │     │  │  ├─ GetAnimeMoreInfoBadRequestException.php
   │     │  │  ├─ GetAnimeNewsBadRequestException.php
   │     │  │  ├─ GetAnimePicturesBadRequestException.php
   │     │  │  ├─ GetAnimeRecommendationsBadRequestException.php
   │     │  │  ├─ GetAnimeReviewsBadRequestException.php
   │     │  │  ├─ GetAnimeSearchBadRequestException.php
   │     │  │  ├─ GetAnimeStaffBadRequestException.php
   │     │  │  ├─ GetAnimeStatisticsBadRequestException.php
   │     │  │  ├─ GetAnimeStreamingBadRequestException.php
   │     │  │  ├─ GetAnimeThemesBadRequestException.php
   │     │  │  ├─ GetAnimeUserUpdatesBadRequestException.php
   │     │  │  ├─ GetAnimeVideosBadRequestException.php
   │     │  │  ├─ GetAnimeVideosEpisodesBadRequestException.php
   │     │  │  ├─ GetCharacterAnimeBadRequestException.php
   │     │  │  ├─ GetCharacterByIdBadRequestException.php
   │     │  │  ├─ GetCharacterFullByIdBadRequestException.php
   │     │  │  ├─ GetCharacterMangaBadRequestException.php
   │     │  │  ├─ GetCharacterPicturesBadRequestException.php
   │     │  │  ├─ GetCharactersSearchBadRequestException.php
   │     │  │  ├─ GetCharacterVoiceActorsBadRequestException.php
   │     │  │  ├─ GetClubMembersBadRequestException.php
   │     │  │  ├─ GetClubRelationsBadRequestException.php
   │     │  │  ├─ GetClubsByIdBadRequestException.php
   │     │  │  ├─ GetClubsSearchBadRequestException.php
   │     │  │  ├─ GetClubStaffBadRequestException.php
   │     │  │  ├─ GetMagazinesBadRequestException.php
   │     │  │  ├─ GetMangaByIdBadRequestException.php
   │     │  │  ├─ GetMangaCharactersBadRequestException.php
   │     │  │  ├─ GetMangaExternalBadRequestException.php
   │     │  │  ├─ GetMangaFullByIdBadRequestException.php
   │     │  │  ├─ GetMangaGenresBadRequestException.php
   │     │  │  ├─ GetMangaMoreInfoBadRequestException.php
   │     │  │  ├─ GetMangaNewsBadRequestException.php
   │     │  │  ├─ GetMangaPicturesBadRequestException.php
   │     │  │  ├─ GetMangaRecommendationsBadRequestException.php
   │     │  │  ├─ GetMangaRelationsBadRequestException.php
   │     │  │  ├─ GetMangaReviewsBadRequestException.php
   │     │  │  ├─ GetMangaSearchBadRequestException.php
   │     │  │  ├─ GetMangaStatisticsBadRequestException.php
   │     │  │  ├─ GetMangaTopicsBadRequestException.php
   │     │  │  ├─ GetMangaUserUpdatesBadRequestException.php
   │     │  │  ├─ GetPeopleSearchBadRequestException.php
   │     │  │  ├─ GetPersonAnimeBadRequestException.php
   │     │  │  ├─ GetPersonByIdBadRequestException.php
   │     │  │  ├─ GetPersonFullByIdBadRequestException.php
   │     │  │  ├─ GetPersonMangaBadRequestException.php
   │     │  │  ├─ GetPersonPicturesBadRequestException.php
   │     │  │  ├─ GetPersonVoicesBadRequestException.php
   │     │  │  ├─ GetProducerByIdBadRequestException.php
   │     │  │  ├─ GetProducerExternalBadRequestException.php
   │     │  │  ├─ GetProducerFullByIdBadRequestException.php
   │     │  │  ├─ GetProducersBadRequestException.php
   │     │  │  ├─ GetRandomAnimeBadRequestException.php
   │     │  │  ├─ GetRandomCharactersBadRequestException.php
   │     │  │  ├─ GetRandomMangaBadRequestException.php
   │     │  │  ├─ GetRandomPeopleBadRequestException.php
   │     │  │  ├─ GetRandomUsersBadRequestException.php
   │     │  │  ├─ GetRecentAnimeRecommendationsBadRequestException.php
   │     │  │  ├─ GetRecentAnimeReviewsBadRequestException.php
   │     │  │  ├─ GetRecentMangaRecommendationsBadRequestException.php
   │     │  │  ├─ GetRecentMangaReviewsBadRequestException.php
   │     │  │  ├─ GetSchedulesBadRequestException.php
   │     │  │  ├─ GetSeasonBadRequestException.php
   │     │  │  ├─ GetSeasonNowBadRequestException.php
   │     │  │  ├─ GetSeasonsListBadRequestException.php
   │     │  │  ├─ GetSeasonUpcomingBadRequestException.php
   │     │  │  ├─ GetTopAnimeBadRequestException.php
   │     │  │  ├─ GetTopCharactersBadRequestException.php
   │     │  │  ├─ GetTopMangaBadRequestException.php
   │     │  │  ├─ GetTopPeopleBadRequestException.php
   │     │  │  ├─ GetTopReviewsBadRequestException.php
   │     │  │  ├─ GetUserAboutBadRequestException.php
   │     │  │  ├─ GetUserAnimelistBadRequestException.php
   │     │  │  ├─ GetUserByIdBadRequestException.php
   │     │  │  ├─ GetUserClubsBadRequestException.php
   │     │  │  ├─ GetUserExternalBadRequestException.php
   │     │  │  ├─ GetUserFavoritesBadRequestException.php
   │     │  │  ├─ GetUserFriendsBadRequestException.php
   │     │  │  ├─ GetUserFullProfileBadRequestException.php
   │     │  │  ├─ GetUserHistoryBadRequestException.php
   │     │  │  ├─ GetUserMangaListBadRequestException.php
   │     │  │  ├─ GetUserProfileBadRequestException.php
   │     │  │  ├─ GetUserRecommendationsBadRequestException.php
   │     │  │  ├─ GetUserReviewsBadRequestException.php
   │     │  │  ├─ GetUsersSearchBadRequestException.php
   │     │  │  ├─ GetUserStatisticsBadRequestException.php
   │     │  │  ├─ GetUserUpdatesBadRequestException.php
   │     │  │  ├─ GetWatchPopularEpisodesBadRequestException.php
   │     │  │  ├─ GetWatchPopularPromosBadRequestException.php
   │     │  │  ├─ GetWatchRecentEpisodesBadRequestException.php
   │     │  │  ├─ GetWatchRecentPromosBadRequestException.php
   │     │  │  └─ ServerException.php
   │     │  ├─ Model
   │     │  │  ├─ Anime.php
   │     │  │  ├─ AnimeCharacters.php
   │     │  │  ├─ AnimeCharactersDataItem.php
   │     │  │  ├─ AnimeCharactersDataItemCharacter.php
   │     │  │  ├─ AnimeCharactersDataItemVoiceActorsItem.php
   │     │  │  ├─ AnimeCharactersDataItemVoiceActorsItemPerson.php
   │     │  │  ├─ AnimeEpisode.php
   │     │  │  ├─ AnimeEpisodes.php
   │     │  │  ├─ AnimeEpisodesdataItem.php
   │     │  │  ├─ AnimeFull.php
   │     │  │  ├─ AnimeFullExternalItem.php
   │     │  │  ├─ AnimeFullRelationsItem.php
   │     │  │  ├─ AnimeFullStreamingItem.php
   │     │  │  ├─ AnimeFullTheme.php
   │     │  │  ├─ AnimeIdEpisodesEpisodeGetResponse200.php
   │     │  │  ├─ AnimeIdFullGetResponse200.php
   │     │  │  ├─ AnimeIdGetResponse200.php
   │     │  │  ├─ AnimeIdRelationsGetResponse200.php
   │     │  │  ├─ AnimeImages.php
   │     │  │  ├─ AnimeImagesJpg.php
   │     │  │  ├─ AnimeImagesWebp.php
   │     │  │  ├─ AnimeMeta.php
   │     │  │  ├─ AnimeNews.php
   │     │  │  ├─ AnimeRelations.php
   │     │  │  ├─ AnimeRelationsDataItem.php
   │     │  │  ├─ AnimeReview.php
   │     │  │  ├─ AnimeReviews.php
   │     │  │  ├─ AnimeReviewScores.php
   │     │  │  ├─ AnimeReviewsdataItem.php
   │     │  │  ├─ AnimeSearch.php
   │     │  │  ├─ AnimeStaff.php
   │     │  │  ├─ AnimeStaffDataItem.php
   │     │  │  ├─ AnimeStaffDataItemPerson.php
   │     │  │  ├─ AnimeStatistics.php
   │     │  │  ├─ AnimeStatisticsData.php
   │     │  │  ├─ AnimeStatisticsDataScoresItem.php
   │     │  │  ├─ AnimeThemes.php
   │     │  │  ├─ AnimeThemesData.php
   │     │  │  ├─ AnimeUserupdates.php
   │     │  │  ├─ AnimeUserupdatesdataItem.php
   │     │  │  ├─ AnimeVideos.php
   │     │  │  ├─ AnimeVideosData.php
   │     │  │  ├─ AnimeVideosDataEpisodesItem.php
   │     │  │  ├─ AnimeVideosDataMusicVideosItem.php
   │     │  │  ├─ AnimeVideosDataMusicVideosItemMeta.php
   │     │  │  ├─ AnimeVideosDataPromoItem.php
   │     │  │  ├─ AnimeVideosEpisodes.php
   │     │  │  ├─ AnimeVideosEpisodesdataItem.php
   │     │  │  ├─ Broadcast.php
   │     │  │  ├─ Character.php
   │     │  │  ├─ CharacterAnime.php
   │     │  │  ├─ CharacterAnimeDataItem.php
   │     │  │  ├─ CharacterFull.php
   │     │  │  ├─ CharacterFullAnimeItem.php
   │     │  │  ├─ CharacterFullMangaItem.php
   │     │  │  ├─ CharacterFullVoicesItem.php
   │     │  │  ├─ CharacterImages.php
   │     │  │  ├─ CharacterImagesJpg.php
   │     │  │  ├─ CharacterImagesWebp.php
   │     │  │  ├─ CharacterManga.php
   │     │  │  ├─ CharacterMangaDataItem.php
   │     │  │  ├─ CharacterMeta.php
   │     │  │  ├─ CharacterPictures.php
   │     │  │  ├─ CharacterPicturesDataItem.php
   │     │  │  ├─ CharactersIdFullGetResponse200.php
   │     │  │  ├─ CharactersIdGetResponse200.php
   │     │  │  ├─ CharactersSearch.php
   │     │  │  ├─ CharacterVoiceActors.php
   │     │  │  ├─ CharacterVoiceActorsDataItem.php
   │     │  │  ├─ Club.php
   │     │  │  ├─ ClubMember.php
   │     │  │  ├─ ClubRelations.php
   │     │  │  ├─ ClubRelationsData.php
   │     │  │  ├─ ClubsIdGetResponse200.php
   │     │  │  ├─ ClubsIdMembersGetResponse200.php
   │     │  │  ├─ ClubsSearch.php
   │     │  │  ├─ ClubStaff.php
   │     │  │  ├─ ClubStaffDataItem.php
   │     │  │  ├─ CommonImages.php
   │     │  │  ├─ CommonImagesJpg.php
   │     │  │  ├─ Daterange.php
   │     │  │  ├─ DaterangeProp.php
   │     │  │  ├─ DaterangePropFrom.php
   │     │  │  ├─ DaterangePropTo.php
   │     │  │  ├─ EntryMeta.php
   │     │  │  ├─ EntryRecommendations.php
   │     │  │  ├─ EntryRecommendationsDataItem.php
   │     │  │  ├─ ExternalLinks.php
   │     │  │  ├─ ExternalLinksDataItem.php
   │     │  │  ├─ Forum.php
   │     │  │  ├─ ForumDataItem.php
   │     │  │  ├─ ForumDataItemLastComment.php
   │     │  │  ├─ Genre.php
   │     │  │  ├─ Genres.php
   │     │  │  ├─ History.php
   │     │  │  ├─ Magazine.php
   │     │  │  ├─ Magazines.php
   │     │  │  ├─ MalUrl.php
   │     │  │  ├─ MalUrl2.php
   │     │  │  ├─ Manga.php
   │     │  │  ├─ MangaCharacters.php
   │     │  │  ├─ MangaCharactersDataItem.php
   │     │  │  ├─ MangaFull.php
   │     │  │  ├─ MangaFullExternalItem.php
   │     │  │  ├─ MangaFullRelationsItem.php
   │     │  │  ├─ MangaIdFullGetResponse200.php
   │     │  │  ├─ MangaIdGetResponse200.php
   │     │  │  ├─ MangaIdRelationsGetResponse200.php
   │     │  │  ├─ MangaImages.php
   │     │  │  ├─ MangaImagesJpg.php
   │     │  │  ├─ MangaImagesWebp.php
   │     │  │  ├─ MangaMeta.php
   │     │  │  ├─ MangaNews.php
   │     │  │  ├─ MangaPictures.php
   │     │  │  ├─ MangaReview.php
   │     │  │  ├─ MangaReviews.php
   │     │  │  ├─ MangaReviewScores.php
   │     │  │  ├─ MangaReviewsdataItem.php
   │     │  │  ├─ MangaSearch.php
   │     │  │  ├─ MangaStatistics.php
   │     │  │  ├─ MangaStatisticsData.php
   │     │  │  ├─ MangaStatisticsDataScoresItem.php
   │     │  │  ├─ MangaUserupdates.php
   │     │  │  ├─ MangaUserupdatesdataItem.php
   │     │  │  ├─ Moreinfo.php
   │     │  │  ├─ MoreinfoData.php
   │     │  │  ├─ News.php
   │     │  │  ├─ NewsDataItem.php
   │     │  │  ├─ Pagination.php
   │     │  │  ├─ PaginationPagination.php
   │     │  │  ├─ PaginationPlus.php
   │     │  │  ├─ PaginationPlusPagination.php
   │     │  │  ├─ PaginationPlusPaginationItems.php
   │     │  │  ├─ PeopleIdFullGetResponse200.php
   │     │  │  ├─ PeopleIdGetResponse200.php
   │     │  │  ├─ PeopleImages.php
   │     │  │  ├─ PeopleImagesJpg.php
   │     │  │  ├─ PeopleSearch.php
   │     │  │  ├─ PeopleSearchdataItem.php
   │     │  │  ├─ Person.php
   │     │  │  ├─ PersonAnime.php
   │     │  │  ├─ PersonAnimeDataItem.php
   │     │  │  ├─ PersonFull.php
   │     │  │  ├─ PersonFullAnimeItem.php
   │     │  │  ├─ PersonFullMangaItem.php
   │     │  │  ├─ PersonFullVoicesItem.php
   │     │  │  ├─ PersonManga.php
   │     │  │  ├─ PersonMangaDataItem.php
   │     │  │  ├─ PersonMeta.php
   │     │  │  ├─ PersonPictures.php
   │     │  │  ├─ PersonVoiceActingRoles.php
   │     │  │  ├─ PersonVoiceActingRolesDataItem.php
   │     │  │  ├─ Pictures.php
   │     │  │  ├─ PicturesDataItem.php
   │     │  │  ├─ PicturesVariants.php
   │     │  │  ├─ PicturesVariantsDataItem.php
   │     │  │  ├─ Producer.php
   │     │  │  ├─ ProducerFull.php
   │     │  │  ├─ ProducerFullExternalItem.php
   │     │  │  ├─ Producers.php
   │     │  │  ├─ ProducersIdFullGetResponse200.php
   │     │  │  ├─ ProducersIdGetResponse200.php
   │     │  │  ├─ Random.php
   │     │  │  ├─ RandomAnimeGetResponse200.php
   │     │  │  ├─ RandomCharactersGetResponse200.php
   │     │  │  ├─ RandomMangaGetResponse200.php
   │     │  │  ├─ RandomPeopleGetResponse200.php
   │     │  │  ├─ RandomUsersGetResponse200.php
   │     │  │  ├─ Recommendations.php
   │     │  │  ├─ RecommendationsdataItem.php
   │     │  │  ├─ Relation.php
   │     │  │  ├─ ReviewsCollection.php
   │     │  │  ├─ Schedules.php
   │     │  │  ├─ Seasons.php
   │     │  │  ├─ SeasonsDataItem.php
   │     │  │  ├─ StreamingLinks.php
   │     │  │  ├─ StreamingLinksDataItem.php
   │     │  │  ├─ TopReviewsGetResponse200.php
   │     │  │  ├─ TopReviewsGetResponse200Data.php
   │     │  │  ├─ Trailer.php
   │     │  │  ├─ TrailerBase.php
   │     │  │  ├─ TrailerImages.php
   │     │  │  ├─ TrailerImagesImages.php
   │     │  │  ├─ UserAbout.php
   │     │  │  ├─ UserAboutDataItem.php
   │     │  │  ├─ UserById.php
   │     │  │  ├─ UserClubs.php
   │     │  │  ├─ UserClubsdataItem.php
   │     │  │  ├─ UserFavorites.php
   │     │  │  ├─ UserFavoritesAnimeItem.php
   │     │  │  ├─ UserFavoritesCharactersItem.php
   │     │  │  ├─ UserFavoritesMangaItem.php
   │     │  │  ├─ UserFriends.php
   │     │  │  ├─ UserFriendsdataItem.php
   │     │  │  ├─ UserHistory.php
   │     │  │  ├─ UserImages.php
   │     │  │  ├─ UserImagesJpg.php
   │     │  │  ├─ UserImagesWebp.php
   │     │  │  ├─ UserMeta.php
   │     │  │  ├─ UserProfile.php
   │     │  │  ├─ UserProfileFull.php
   │     │  │  ├─ UserProfileFullExternalItem.php
   │     │  │  ├─ UserProfileFullStatistics.php
   │     │  │  ├─ UserProfileFullStatisticsAnime.php
   │     │  │  ├─ UserProfileFullStatisticsManga.php
   │     │  │  ├─ UsersSearch.php
   │     │  │  ├─ UsersSearchdataItem.php
   │     │  │  ├─ UserStatistics.php
   │     │  │  ├─ UserStatisticsData.php
   │     │  │  ├─ UserStatisticsDataAnime.php
   │     │  │  ├─ UserStatisticsDataManga.php
   │     │  │  ├─ UsersTemp.php
   │     │  │  ├─ UsersTempDataItem.php
   │     │  │  ├─ UsersTempDataItemAnimeStats.php
   │     │  │  ├─ UsersTempDataItemFavorites.php
   │     │  │  ├─ UsersTempDataItemImages.php
   │     │  │  ├─ UsersTempDataItemImagesJpg.php
   │     │  │  ├─ UsersTempDataItemImagesWebp.php
   │     │  │  ├─ UsersTempDataItemMangaStats.php
   │     │  │  ├─ UsersUserbyidIdGetResponse200.php
   │     │  │  ├─ UsersUsernameFavoritesGetResponse200.php
   │     │  │  ├─ UsersUsernameFullGetResponse200.php
   │     │  │  ├─ UsersUsernameGetResponse200.php
   │     │  │  ├─ UsersUsernameReviewsGetResponse200.php
   │     │  │  ├─ UsersUsernameReviewsGetResponse200Data.php
   │     │  │  ├─ UserUpdates.php
   │     │  │  ├─ UserUpdatesData.php
   │     │  │  ├─ UserUpdatesDataAnimeItem.php
   │     │  │  ├─ UserUpdatesDataMangaItem.php
   │     │  │  ├─ WatchEpisodes.php
   │     │  │  ├─ WatchEpisodesdataItem.php
   │     │  │  ├─ WatchEpisodesdataItemEpisodesItem.php
   │     │  │  └─ WatchPromos.php
   │     │  ├─ Normalizer
   │     │  │  ├─ AnimeCharactersDataItemCharacterNormalizer.php
   │     │  │  ├─ AnimeCharactersDataItemNormalizer.php
   │     │  │  ├─ AnimeCharactersDataItemVoiceActorsItemNormalizer.php
   │     │  │  ├─ AnimeCharactersDataItemVoiceActorsItemPersonNormalizer.php
   │     │  │  ├─ AnimeCharactersNormalizer.php
   │     │  │  ├─ AnimeEpisodeNormalizer.php
   │     │  │  ├─ AnimeEpisodesdataItemNormalizer.php
   │     │  │  ├─ AnimeEpisodesNormalizer.php
   │     │  │  ├─ AnimeFullExternalItemNormalizer.php
   │     │  │  ├─ AnimeFullNormalizer.php
   │     │  │  ├─ AnimeFullRelationsItemNormalizer.php
   │     │  │  ├─ AnimeFullStreamingItemNormalizer.php
   │     │  │  ├─ AnimeFullThemeNormalizer.php
   │     │  │  ├─ AnimeIdEpisodesEpisodeGetResponse200Normalizer.php
   │     │  │  ├─ AnimeIdFullGetResponse200Normalizer.php
   │     │  │  ├─ AnimeIdGetResponse200Normalizer.php
   │     │  │  ├─ AnimeIdRelationsGetResponse200Normalizer.php
   │     │  │  ├─ AnimeImagesJpgNormalizer.php
   │     │  │  ├─ AnimeImagesNormalizer.php
   │     │  │  ├─ AnimeImagesWebpNormalizer.php
   │     │  │  ├─ AnimeMetaNormalizer.php
   │     │  │  ├─ AnimeNewsNormalizer.php
   │     │  │  ├─ AnimeNormalizer.php
   │     │  │  ├─ AnimeRelationsDataItemNormalizer.php
   │     │  │  ├─ AnimeRelationsNormalizer.php
   │     │  │  ├─ AnimeReviewNormalizer.php
   │     │  │  ├─ AnimeReviewScoresNormalizer.php
   │     │  │  ├─ AnimeReviewsdataItemNormalizer.php
   │     │  │  ├─ AnimeReviewsNormalizer.php
   │     │  │  ├─ AnimeSearchNormalizer.php
   │     │  │  ├─ AnimeStaffDataItemNormalizer.php
   │     │  │  ├─ AnimeStaffDataItemPersonNormalizer.php
   │     │  │  ├─ AnimeStaffNormalizer.php
   │     │  │  ├─ AnimeStatisticsDataNormalizer.php
   │     │  │  ├─ AnimeStatisticsDataScoresItemNormalizer.php
   │     │  │  ├─ AnimeStatisticsNormalizer.php
   │     │  │  ├─ AnimeThemesDataNormalizer.php
   │     │  │  ├─ AnimeThemesNormalizer.php
   │     │  │  ├─ AnimeUserupdatesdataItemNormalizer.php
   │     │  │  ├─ AnimeUserupdatesNormalizer.php
   │     │  │  ├─ AnimeVideosDataEpisodesItemNormalizer.php
   │     │  │  ├─ AnimeVideosDataMusicVideosItemMetaNormalizer.php
   │     │  │  ├─ AnimeVideosDataMusicVideosItemNormalizer.php
   │     │  │  ├─ AnimeVideosDataNormalizer.php
   │     │  │  ├─ AnimeVideosDataPromoItemNormalizer.php
   │     │  │  ├─ AnimeVideosEpisodesdataItemNormalizer.php
   │     │  │  ├─ AnimeVideosEpisodesNormalizer.php
   │     │  │  ├─ AnimeVideosNormalizer.php
   │     │  │  ├─ BroadcastNormalizer.php
   │     │  │  ├─ CharacterAnimeDataItemNormalizer.php
   │     │  │  ├─ CharacterAnimeNormalizer.php
   │     │  │  ├─ CharacterFullAnimeItemNormalizer.php
   │     │  │  ├─ CharacterFullMangaItemNormalizer.php
   │     │  │  ├─ CharacterFullNormalizer.php
   │     │  │  ├─ CharacterFullVoicesItemNormalizer.php
   │     │  │  ├─ CharacterImagesJpgNormalizer.php
   │     │  │  ├─ CharacterImagesNormalizer.php
   │     │  │  ├─ CharacterImagesWebpNormalizer.php
   │     │  │  ├─ CharacterMangaDataItemNormalizer.php
   │     │  │  ├─ CharacterMangaNormalizer.php
   │     │  │  ├─ CharacterMetaNormalizer.php
   │     │  │  ├─ CharacterNormalizer.php
   │     │  │  ├─ CharacterPicturesDataItemNormalizer.php
   │     │  │  ├─ CharacterPicturesNormalizer.php
   │     │  │  ├─ CharactersIdFullGetResponse200Normalizer.php
   │     │  │  ├─ CharactersIdGetResponse200Normalizer.php
   │     │  │  ├─ CharactersSearchNormalizer.php
   │     │  │  ├─ CharacterVoiceActorsDataItemNormalizer.php
   │     │  │  ├─ CharacterVoiceActorsNormalizer.php
   │     │  │  ├─ ClubMemberNormalizer.php
   │     │  │  ├─ ClubNormalizer.php
   │     │  │  ├─ ClubRelationsDataNormalizer.php
   │     │  │  ├─ ClubRelationsNormalizer.php
   │     │  │  ├─ ClubsIdGetResponse200Normalizer.php
   │     │  │  ├─ ClubsIdMembersGetResponse200Normalizer.php
   │     │  │  ├─ ClubsSearchNormalizer.php
   │     │  │  ├─ ClubStaffDataItemNormalizer.php
   │     │  │  ├─ ClubStaffNormalizer.php
   │     │  │  ├─ CommonImagesJpgNormalizer.php
   │     │  │  ├─ CommonImagesNormalizer.php
   │     │  │  ├─ DaterangeNormalizer.php
   │     │  │  ├─ DaterangePropFromNormalizer.php
   │     │  │  ├─ DaterangePropNormalizer.php
   │     │  │  ├─ DaterangePropToNormalizer.php
   │     │  │  ├─ EntryMetaNormalizer.php
   │     │  │  ├─ EntryRecommendationsDataItemNormalizer.php
   │     │  │  ├─ EntryRecommendationsNormalizer.php
   │     │  │  ├─ ExternalLinksDataItemNormalizer.php
   │     │  │  ├─ ExternalLinksNormalizer.php
   │     │  │  ├─ ForumDataItemLastCommentNormalizer.php
   │     │  │  ├─ ForumDataItemNormalizer.php
   │     │  │  ├─ ForumNormalizer.php
   │     │  │  ├─ GenreNormalizer.php
   │     │  │  ├─ GenresNormalizer.php
   │     │  │  ├─ HistoryNormalizer.php
   │     │  │  ├─ JaneObjectNormalizer.php
   │     │  │  ├─ MagazineNormalizer.php
   │     │  │  ├─ MagazinesNormalizer.php
   │     │  │  ├─ MalUrl2Normalizer.php
   │     │  │  ├─ MalUrlNormalizer.php
   │     │  │  ├─ MangaCharactersDataItemNormalizer.php
   │     │  │  ├─ MangaCharactersNormalizer.php
   │     │  │  ├─ MangaFullExternalItemNormalizer.php
   │     │  │  ├─ MangaFullNormalizer.php
   │     │  │  ├─ MangaFullRelationsItemNormalizer.php
   │     │  │  ├─ MangaIdFullGetResponse200Normalizer.php
   │     │  │  ├─ MangaIdGetResponse200Normalizer.php
   │     │  │  ├─ MangaIdRelationsGetResponse200Normalizer.php
   │     │  │  ├─ MangaImagesJpgNormalizer.php
   │     │  │  ├─ MangaImagesNormalizer.php
   │     │  │  ├─ MangaImagesWebpNormalizer.php
   │     │  │  ├─ MangaMetaNormalizer.php
   │     │  │  ├─ MangaNewsNormalizer.php
   │     │  │  ├─ MangaNormalizer.php
   │     │  │  ├─ MangaPicturesNormalizer.php
   │     │  │  ├─ MangaReviewNormalizer.php
   │     │  │  ├─ MangaReviewScoresNormalizer.php
   │     │  │  ├─ MangaReviewsdataItemNormalizer.php
   │     │  │  ├─ MangaReviewsNormalizer.php
   │     │  │  ├─ MangaSearchNormalizer.php
   │     │  │  ├─ MangaStatisticsDataNormalizer.php
   │     │  │  ├─ MangaStatisticsDataScoresItemNormalizer.php
   │     │  │  ├─ MangaStatisticsNormalizer.php
   │     │  │  ├─ MangaUserupdatesdataItemNormalizer.php
   │     │  │  ├─ MangaUserupdatesNormalizer.php
   │     │  │  ├─ MoreinfoDataNormalizer.php
   │     │  │  ├─ MoreinfoNormalizer.php
   │     │  │  ├─ NewsDataItemNormalizer.php
   │     │  │  ├─ NewsNormalizer.php
   │     │  │  ├─ PaginationNormalizer.php
   │     │  │  ├─ PaginationPaginationNormalizer.php
   │     │  │  ├─ PaginationPlusNormalizer.php
   │     │  │  ├─ PaginationPlusPaginationItemsNormalizer.php
   │     │  │  ├─ PaginationPlusPaginationNormalizer.php
   │     │  │  ├─ PeopleIdFullGetResponse200Normalizer.php
   │     │  │  ├─ PeopleIdGetResponse200Normalizer.php
   │     │  │  ├─ PeopleImagesJpgNormalizer.php
   │     │  │  ├─ PeopleImagesNormalizer.php
   │     │  │  ├─ PeopleSearchdataItemNormalizer.php
   │     │  │  ├─ PeopleSearchNormalizer.php
   │     │  │  ├─ PersonAnimeDataItemNormalizer.php
   │     │  │  ├─ PersonAnimeNormalizer.php
   │     │  │  ├─ PersonFullAnimeItemNormalizer.php
   │     │  │  ├─ PersonFullMangaItemNormalizer.php
   │     │  │  ├─ PersonFullNormalizer.php
   │     │  │  ├─ PersonFullVoicesItemNormalizer.php
   │     │  │  ├─ PersonMangaDataItemNormalizer.php
   │     │  │  ├─ PersonMangaNormalizer.php
   │     │  │  ├─ PersonMetaNormalizer.php
   │     │  │  ├─ PersonNormalizer.php
   │     │  │  ├─ PersonPicturesNormalizer.php
   │     │  │  ├─ PersonVoiceActingRolesDataItemNormalizer.php
   │     │  │  ├─ PersonVoiceActingRolesNormalizer.php
   │     │  │  ├─ PicturesDataItemNormalizer.php
   │     │  │  ├─ PicturesNormalizer.php
   │     │  │  ├─ PicturesVariantsDataItemNormalizer.php
   │     │  │  ├─ PicturesVariantsNormalizer.php
   │     │  │  ├─ ProducerFullExternalItemNormalizer.php
   │     │  │  ├─ ProducerFullNormalizer.php
   │     │  │  ├─ ProducerNormalizer.php
   │     │  │  ├─ ProducersIdFullGetResponse200Normalizer.php
   │     │  │  ├─ ProducersIdGetResponse200Normalizer.php
   │     │  │  ├─ ProducersNormalizer.php
   │     │  │  ├─ RandomAnimeGetResponse200Normalizer.php
   │     │  │  ├─ RandomCharactersGetResponse200Normalizer.php
   │     │  │  ├─ RandomMangaGetResponse200Normalizer.php
   │     │  │  ├─ RandomNormalizer.php
   │     │  │  ├─ RandomPeopleGetResponse200Normalizer.php
   │     │  │  ├─ RandomUsersGetResponse200Normalizer.php
   │     │  │  ├─ RecommendationsdataItemNormalizer.php
   │     │  │  ├─ RecommendationsNormalizer.php
   │     │  │  ├─ RelationNormalizer.php
   │     │  │  ├─ ReviewsCollectionNormalizer.php
   │     │  │  ├─ SchedulesNormalizer.php
   │     │  │  ├─ SeasonsDataItemNormalizer.php
   │     │  │  ├─ SeasonsNormalizer.php
   │     │  │  ├─ StreamingLinksDataItemNormalizer.php
   │     │  │  ├─ StreamingLinksNormalizer.php
   │     │  │  ├─ TopReviewsGetResponse200DataNormalizer.php
   │     │  │  ├─ TopReviewsGetResponse200Normalizer.php
   │     │  │  ├─ TrailerBaseNormalizer.php
   │     │  │  ├─ TrailerImagesImagesNormalizer.php
   │     │  │  ├─ TrailerImagesNormalizer.php
   │     │  │  ├─ TrailerNormalizer.php
   │     │  │  ├─ UserAboutDataItemNormalizer.php
   │     │  │  ├─ UserAboutNormalizer.php
   │     │  │  ├─ UserByIdNormalizer.php
   │     │  │  ├─ UserClubsdataItemNormalizer.php
   │     │  │  ├─ UserClubsNormalizer.php
   │     │  │  ├─ UserFavoritesAnimeItemNormalizer.php
   │     │  │  ├─ UserFavoritesCharactersItemNormalizer.php
   │     │  │  ├─ UserFavoritesMangaItemNormalizer.php
   │     │  │  ├─ UserFavoritesNormalizer.php
   │     │  │  ├─ UserFriendsdataItemNormalizer.php
   │     │  │  ├─ UserFriendsNormalizer.php
   │     │  │  ├─ UserHistoryNormalizer.php
   │     │  │  ├─ UserImagesJpgNormalizer.php
   │     │  │  ├─ UserImagesNormalizer.php
   │     │  │  ├─ UserImagesWebpNormalizer.php
   │     │  │  ├─ UserMetaNormalizer.php
   │     │  │  ├─ UserProfileFullExternalItemNormalizer.php
   │     │  │  ├─ UserProfileFullNormalizer.php
   │     │  │  ├─ UserProfileFullStatisticsAnimeNormalizer.php
   │     │  │  ├─ UserProfileFullStatisticsMangaNormalizer.php
   │     │  │  ├─ UserProfileFullStatisticsNormalizer.php
   │     │  │  ├─ UserProfileNormalizer.php
   │     │  │  ├─ UsersSearchdataItemNormalizer.php
   │     │  │  ├─ UsersSearchNormalizer.php
   │     │  │  ├─ UserStatisticsDataAnimeNormalizer.php
   │     │  │  ├─ UserStatisticsDataMangaNormalizer.php
   │     │  │  ├─ UserStatisticsDataNormalizer.php
   │     │  │  ├─ UserStatisticsNormalizer.php
   │     │  │  ├─ UsersTempDataItemAnimeStatsNormalizer.php
   │     │  │  ├─ UsersTempDataItemFavoritesNormalizer.php
   │     │  │  ├─ UsersTempDataItemImagesJpgNormalizer.php
   │     │  │  ├─ UsersTempDataItemImagesNormalizer.php
   │     │  │  ├─ UsersTempDataItemImagesWebpNormalizer.php
   │     │  │  ├─ UsersTempDataItemMangaStatsNormalizer.php
   │     │  │  ├─ UsersTempDataItemNormalizer.php
   │     │  │  ├─ UsersTempNormalizer.php
   │     │  │  ├─ UsersUserbyidIdGetResponse200Normalizer.php
   │     │  │  ├─ UsersUsernameFavoritesGetResponse200Normalizer.php
   │     │  │  ├─ UsersUsernameFullGetResponse200Normalizer.php
   │     │  │  ├─ UsersUsernameGetResponse200Normalizer.php
   │     │  │  ├─ UsersUsernameReviewsGetResponse200DataNormalizer.php
   │     │  │  ├─ UsersUsernameReviewsGetResponse200Normalizer.php
   │     │  │  ├─ UserUpdatesDataAnimeItemNormalizer.php
   │     │  │  ├─ UserUpdatesDataMangaItemNormalizer.php
   │     │  │  ├─ UserUpdatesDataNormalizer.php
   │     │  │  ├─ UserUpdatesNormalizer.php
   │     │  │  ├─ WatchEpisodesdataItemEpisodesItemNormalizer.php
   │     │  │  ├─ WatchEpisodesdataItemNormalizer.php
   │     │  │  ├─ WatchEpisodesNormalizer.php
   │     │  │  └─ WatchPromosNormalizer.php
   │     │  └─ Runtime
   │     │     ├─ Client
   │     │     │  ├─ BaseEndpoint.php
   │     │     │  ├─ Client.php
   │     │     │  ├─ CustomQueryResolver.php
   │     │     │  ├─ Endpoint.php
   │     │     │  └─ EndpointTrait.php
   │     │     └─ Normalizer
   │     │        ├─ CheckArray.php
   │     │        └─ ReferenceNormalizer.php
   │     └─ tests
   │        ├─ bootstrap.php
   │        └─ ClientTest.php
   ├─ league
   │  ├─ uri
   │  │  ├─ BaseUri.php
   │  │  ├─ composer.json
   │  │  ├─ Http.php
   │  │  ├─ HttpFactory.php
   │  │  ├─ LICENSE
   │  │  ├─ Uri.php
   │  │  ├─ UriInfo.php
   │  │  ├─ UriResolver.php
   │  │  ├─ UriTemplate
   │  │  │  ├─ Expression.php
   │  │  │  ├─ Operator.php
   │  │  │  ├─ Template.php
   │  │  │  ├─ TemplateCanNotBeExpanded.php
   │  │  │  ├─ VariableBag.php
   │  │  │  └─ VarSpecifier.php
   │  │  └─ UriTemplate.php
   │  └─ uri-interfaces
   │     ├─ composer.json
   │     ├─ Contracts
   │     │  ├─ AuthorityInterface.php
   │     │  ├─ DataPathInterface.php
   │     │  ├─ DomainHostInterface.php
   │     │  ├─ FragmentInterface.php
   │     │  ├─ HostInterface.php
   │     │  ├─ IpHostInterface.php
   │     │  ├─ PathInterface.php
   │     │  ├─ PortInterface.php
   │     │  ├─ QueryInterface.php
   │     │  ├─ SegmentedPathInterface.php
   │     │  ├─ UriAccess.php
   │     │  ├─ UriComponentInterface.php
   │     │  ├─ UriException.php
   │     │  ├─ UriInterface.php
   │     │  └─ UserInfoInterface.php
   │     ├─ Encoder.php
   │     ├─ Exceptions
   │     │  ├─ ConversionFailed.php
   │     │  ├─ MissingFeature.php
   │     │  ├─ OffsetOutOfBounds.php
   │     │  └─ SyntaxError.php
   │     ├─ FeatureDetection.php
   │     ├─ Idna
   │     │  ├─ Converter.php
   │     │  ├─ Error.php
   │     │  ├─ Option.php
   │     │  └─ Result.php
   │     ├─ IPv4
   │     │  ├─ BCMathCalculator.php
   │     │  ├─ Calculator.php
   │     │  ├─ Converter.php
   │     │  ├─ GMPCalculator.php
   │     │  └─ NativeCalculator.php
   │     ├─ KeyValuePair
   │     │  └─ Converter.php
   │     ├─ LICENSE
   │     ├─ QueryString.php
   │     └─ UriString.php
   ├─ nyholm
   │  └─ psr7
   │     ├─ CHANGELOG.md
   │     ├─ composer.json
   │     ├─ LICENSE
   │     ├─ README.md
   │     └─ src
   │        ├─ Factory
   │        │  ├─ HttplugFactory.php
   │        │  └─ Psr17Factory.php
   │        ├─ MessageTrait.php
   │        ├─ Request.php
   │        ├─ RequestTrait.php
   │        ├─ Response.php
   │        ├─ ServerRequest.php
   │        ├─ Stream.php
   │        ├─ StreamTrait.php
   │        ├─ UploadedFile.php
   │        └─ Uri.php
   ├─ php-http
   │  ├─ client-common
   │  │  ├─ .php-cs-fixer.dist.php
   │  │  ├─ .php_cs.dist
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ BatchClient.php
   │  │     ├─ BatchClientInterface.php
   │  │     ├─ BatchResult.php
   │  │     ├─ Deferred.php
   │  │     ├─ EmulatedHttpAsyncClient.php
   │  │     ├─ EmulatedHttpClient.php
   │  │     ├─ Exception
   │  │     │  ├─ BatchException.php
   │  │     │  ├─ CircularRedirectionException.php
   │  │     │  ├─ ClientErrorException.php
   │  │     │  ├─ HttpClientNoMatchException.php
   │  │     │  ├─ HttpClientNotFoundException.php
   │  │     │  ├─ LoopException.php
   │  │     │  ├─ MultipleRedirectionException.php
   │  │     │  └─ ServerErrorException.php
   │  │     ├─ FlexibleHttpClient.php
   │  │     ├─ HttpAsyncClientDecorator.php
   │  │     ├─ HttpAsyncClientEmulator.php
   │  │     ├─ HttpClientDecorator.php
   │  │     ├─ HttpClientEmulator.php
   │  │     ├─ HttpClientPool
   │  │     │  ├─ HttpClientPool.php
   │  │     │  ├─ HttpClientPoolItem.php
   │  │     │  ├─ LeastUsedClientPool.php
   │  │     │  ├─ RandomClientPool.php
   │  │     │  └─ RoundRobinClientPool.php
   │  │     ├─ HttpClientPool.php
   │  │     ├─ HttpClientRouter.php
   │  │     ├─ HttpClientRouterInterface.php
   │  │     ├─ HttpMethodsClient.php
   │  │     ├─ HttpMethodsClientInterface.php
   │  │     ├─ Plugin
   │  │     │  ├─ AddHostPlugin.php
   │  │     │  ├─ AddPathPlugin.php
   │  │     │  ├─ AuthenticationPlugin.php
   │  │     │  ├─ BaseUriPlugin.php
   │  │     │  ├─ ContentLengthPlugin.php
   │  │     │  ├─ ContentTypePlugin.php
   │  │     │  ├─ CookiePlugin.php
   │  │     │  ├─ DecoderPlugin.php
   │  │     │  ├─ ErrorPlugin.php
   │  │     │  ├─ HeaderAppendPlugin.php
   │  │     │  ├─ HeaderDefaultsPlugin.php
   │  │     │  ├─ HeaderRemovePlugin.php
   │  │     │  ├─ HeaderSetPlugin.php
   │  │     │  ├─ HistoryPlugin.php
   │  │     │  ├─ Journal.php
   │  │     │  ├─ QueryDefaultsPlugin.php
   │  │     │  ├─ RedirectPlugin.php
   │  │     │  ├─ RequestMatcherPlugin.php
   │  │     │  ├─ RequestSeekableBodyPlugin.php
   │  │     │  ├─ ResponseSeekableBodyPlugin.php
   │  │     │  ├─ RetryPlugin.php
   │  │     │  ├─ SeekableBodyPlugin.php
   │  │     │  └─ VersionBridgePlugin.php
   │  │     ├─ Plugin.php
   │  │     ├─ PluginChain.php
   │  │     ├─ PluginClient.php
   │  │     ├─ PluginClientBuilder.php
   │  │     ├─ PluginClientFactory.php
   │  │     └─ VersionBridgeClient.php
   │  ├─ discovery
   │  │  ├─ .php-cs-fixer.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ ClassDiscovery.php
   │  │     ├─ Composer
   │  │     │  └─ Plugin.php
   │  │     ├─ Exception
   │  │     │  ├─ ClassInstantiationFailedException.php
   │  │     │  ├─ DiscoveryFailedException.php
   │  │     │  ├─ NoCandidateFoundException.php
   │  │     │  ├─ NotFoundException.php
   │  │     │  ├─ PuliUnavailableException.php
   │  │     │  └─ StrategyUnavailableException.php
   │  │     ├─ Exception.php
   │  │     ├─ HttpAsyncClientDiscovery.php
   │  │     ├─ HttpClientDiscovery.php
   │  │     ├─ MessageFactoryDiscovery.php
   │  │     ├─ NotFoundException.php
   │  │     ├─ Psr17Factory.php
   │  │     ├─ Psr17FactoryDiscovery.php
   │  │     ├─ Psr18Client.php
   │  │     ├─ Psr18ClientDiscovery.php
   │  │     ├─ Strategy
   │  │     │  ├─ CommonClassesStrategy.php
   │  │     │  ├─ CommonPsr17ClassesStrategy.php
   │  │     │  ├─ DiscoveryStrategy.php
   │  │     │  ├─ MockClientStrategy.php
   │  │     │  └─ PuliBetaStrategy.php
   │  │     ├─ StreamFactoryDiscovery.php
   │  │     └─ UriFactoryDiscovery.php
   │  ├─ guzzle7-adapter
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ phpstan.neon.dist
   │  │  ├─ psalm.baseline.xml
   │  │  ├─ psalm.xml
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ Client.php
   │  │     ├─ Exception
   │  │     │  └─ UnexpectedValueException.php
   │  │     └─ Promise.php
   │  ├─ httplug
   │  │  ├─ .php-cs-fixer.dist.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ puli.json
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ Exception
   │  │     │  ├─ HttpException.php
   │  │     │  ├─ NetworkException.php
   │  │     │  ├─ RequestAwareTrait.php
   │  │     │  ├─ RequestException.php
   │  │     │  └─ TransferException.php
   │  │     ├─ Exception.php
   │  │     ├─ HttpAsyncClient.php
   │  │     ├─ HttpClient.php
   │  │     └─ Promise
   │  │        ├─ HttpFulfilledPromise.php
   │  │        └─ HttpRejectedPromise.php
   │  ├─ message
   │  │  ├─ .php-cs-fixer.dist.php
   │  │  ├─ apigen.neon
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ puli.json
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ Authentication
   │  │     │  ├─ AutoBasicAuth.php
   │  │     │  ├─ BasicAuth.php
   │  │     │  ├─ Bearer.php
   │  │     │  ├─ Chain.php
   │  │     │  ├─ Header.php
   │  │     │  ├─ Matching.php
   │  │     │  ├─ QueryParam.php
   │  │     │  ├─ RequestConditional.php
   │  │     │  └─ Wsse.php
   │  │     ├─ Authentication.php
   │  │     ├─ Builder
   │  │     │  └─ ResponseBuilder.php
   │  │     ├─ Cookie.php
   │  │     ├─ CookieJar.php
   │  │     ├─ CookieUtil.php
   │  │     ├─ Decorator
   │  │     │  ├─ MessageDecorator.php
   │  │     │  ├─ RequestDecorator.php
   │  │     │  ├─ ResponseDecorator.php
   │  │     │  └─ StreamDecorator.php
   │  │     ├─ Encoding
   │  │     │  ├─ ChunkStream.php
   │  │     │  ├─ CompressStream.php
   │  │     │  ├─ DechunkStream.php
   │  │     │  ├─ DecompressStream.php
   │  │     │  ├─ DeflateStream.php
   │  │     │  ├─ Filter
   │  │     │  │  └─ Chunk.php
   │  │     │  ├─ FilteredStream.php
   │  │     │  ├─ GzipDecodeStream.php
   │  │     │  ├─ GzipEncodeStream.php
   │  │     │  └─ InflateStream.php
   │  │     ├─ Exception
   │  │     │  └─ UnexpectedValueException.php
   │  │     ├─ Exception.php
   │  │     ├─ filters.php
   │  │     ├─ Formatter
   │  │     │  ├─ CurlCommandFormatter.php
   │  │     │  ├─ FullHttpMessageFormatter.php
   │  │     │  └─ SimpleFormatter.php
   │  │     ├─ Formatter.php
   │  │     ├─ MessageFactory
   │  │     │  ├─ DiactorosMessageFactory.php
   │  │     │  ├─ GuzzleMessageFactory.php
   │  │     │  └─ SlimMessageFactory.php
   │  │     ├─ RequestMatcher
   │  │     │  ├─ CallbackRequestMatcher.php
   │  │     │  ├─ RegexRequestMatcher.php
   │  │     │  └─ RequestMatcher.php
   │  │     ├─ RequestMatcher.php
   │  │     ├─ Stream
   │  │     │  └─ BufferedStream.php
   │  │     ├─ StreamFactory
   │  │     │  ├─ DiactorosStreamFactory.php
   │  │     │  ├─ GuzzleStreamFactory.php
   │  │     │  └─ SlimStreamFactory.php
   │  │     └─ UriFactory
   │  │        ├─ DiactorosUriFactory.php
   │  │        ├─ GuzzleUriFactory.php
   │  │        └─ SlimUriFactory.php
   │  ├─ multipart-stream-builder
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ ApacheMimetypeHelper.php
   │  │     ├─ CustomMimetypeHelper.php
   │  │     ├─ MimetypeHelper.php
   │  │     └─ MultipartStreamBuilder.php
   │  └─ promise
   │     ├─ CHANGELOG.md
   │     ├─ composer.json
   │     ├─ LICENSE
   │     ├─ phpstan.neon.dist
   │     ├─ README.md
   │     └─ src
   │        ├─ FulfilledPromise.php
   │        ├─ Promise.php
   │        └─ RejectedPromise.php
   ├─ php-jsonpointer
   │  └─ php-jsonpointer
   │     ├─ composer.json
   │     └─ src
   │        └─ Rs
   │           └─ Json
   │              ├─ Pointer
   │              │  ├─ InvalidJsonException.php
   │              │  ├─ InvalidPointerException.php
   │              │  ├─ NonexistentValueReferencedException.php
   │              │  └─ NonWalkableJsonException.php
   │              └─ Pointer.php
   ├─ psr
   │  ├─ http-client
   │  │  ├─ CHANGELOG.md
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ ClientExceptionInterface.php
   │  │     ├─ ClientInterface.php
   │  │     ├─ NetworkExceptionInterface.php
   │  │     └─ RequestExceptionInterface.php
   │  ├─ http-factory
   │  │  ├─ composer.json
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ src
   │  │     ├─ RequestFactoryInterface.php
   │  │     ├─ ResponseFactoryInterface.php
   │  │     ├─ ServerRequestFactoryInterface.php
   │  │     ├─ StreamFactoryInterface.php
   │  │     ├─ UploadedFileFactoryInterface.php
   │  │     └─ UriFactoryInterface.php
   │  └─ http-message
   │     ├─ CHANGELOG.md
   │     ├─ composer.json
   │     ├─ docs
   │     │  ├─ PSR7-Interfaces.md
   │     │  └─ PSR7-Usage.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     └─ src
   │        ├─ MessageInterface.php
   │        ├─ RequestInterface.php
   │        ├─ ResponseInterface.php
   │        ├─ ServerRequestInterface.php
   │        ├─ StreamInterface.php
   │        ├─ UploadedFileInterface.php
   │        └─ UriInterface.php
   ├─ ralouphie
   │  └─ getallheaders
   │     ├─ composer.json
   │     ├─ LICENSE
   │     ├─ README.md
   │     └─ src
   │        └─ getallheaders.php
   └─ symfony
      ├─ deprecation-contracts
      │  ├─ CHANGELOG.md
      │  ├─ composer.json
      │  ├─ function.php
      │  ├─ LICENSE
      │  └─ README.md
      ├─ options-resolver
      │  ├─ CHANGELOG.md
      │  ├─ composer.json
      │  ├─ Debug
      │  │  └─ OptionsResolverIntrospector.php
      │  ├─ Exception
      │  │  ├─ AccessException.php
      │  │  ├─ ExceptionInterface.php
      │  │  ├─ InvalidArgumentException.php
      │  │  ├─ InvalidOptionsException.php
      │  │  ├─ MissingOptionsException.php
      │  │  ├─ NoConfigurationException.php
      │  │  ├─ NoSuchOptionException.php
      │  │  ├─ OptionDefinitionException.php
      │  │  └─ UndefinedOptionsException.php
      │  ├─ LICENSE
      │  ├─ OptionConfigurator.php
      │  ├─ Options.php
      │  ├─ OptionsResolver.php
      │  └─ README.md
      ├─ polyfill-ctype
      │  ├─ bootstrap.php
      │  ├─ bootstrap80.php
      │  ├─ composer.json
      │  ├─ Ctype.php
      │  ├─ LICENSE
      │  └─ README.md
      ├─ polyfill-php80
      │  ├─ bootstrap.php
      │  ├─ composer.json
      │  ├─ LICENSE
      │  ├─ Php80.php
      │  ├─ PhpToken.php
      │  ├─ README.md
      │  └─ Resources
      │     └─ stubs
      │        ├─ Attribute.php
      │        ├─ PhpToken.php
      │        ├─ Stringable.php
      │        ├─ UnhandledMatchError.php
      │        └─ ValueError.php
      ├─ serializer
      │  ├─ Annotation
      │  │  ├─ Context.php
      │  │  ├─ DiscriminatorMap.php
      │  │  ├─ Groups.php
      │  │  ├─ Ignore.php
      │  │  ├─ MaxDepth.php
      │  │  ├─ SerializedName.php
      │  │  └─ SerializedPath.php
      │  ├─ Attribute
      │  │  ├─ Context.php
      │  │  ├─ DiscriminatorMap.php
      │  │  ├─ Groups.php
      │  │  ├─ Ignore.php
      │  │  ├─ MaxDepth.php
      │  │  ├─ SerializedName.php
      │  │  └─ SerializedPath.php
      │  ├─ CacheWarmer
      │  │  └─ CompiledClassMetadataCacheWarmer.php
      │  ├─ CHANGELOG.md
      │  ├─ Command
      │  │  └─ DebugCommand.php
      │  ├─ composer.json
      │  ├─ Context
      │  │  ├─ ContextBuilderInterface.php
      │  │  ├─ ContextBuilderTrait.php
      │  │  ├─ Encoder
      │  │  │  ├─ CsvEncoderContextBuilder.php
      │  │  │  ├─ JsonEncoderContextBuilder.php
      │  │  │  ├─ XmlEncoderContextBuilder.php
      │  │  │  └─ YamlEncoderContextBuilder.php
      │  │  ├─ Normalizer
      │  │  │  ├─ AbstractNormalizerContextBuilder.php
      │  │  │  ├─ AbstractObjectNormalizerContextBuilder.php
      │  │  │  ├─ BackedEnumNormalizerContextBuilder.php
      │  │  │  ├─ ConstraintViolationListNormalizerContextBuilder.php
      │  │  │  ├─ DateIntervalNormalizerContextBuilder.php
      │  │  │  ├─ DateTimeNormalizerContextBuilder.php
      │  │  │  ├─ FormErrorNormalizerContextBuilder.php
      │  │  │  ├─ GetSetMethodNormalizerContextBuilder.php
      │  │  │  ├─ JsonSerializableNormalizerContextBuilder.php
      │  │  │  ├─ ObjectNormalizerContextBuilder.php
      │  │  │  ├─ ProblemNormalizerContextBuilder.php
      │  │  │  ├─ PropertyNormalizerContextBuilder.php
      │  │  │  ├─ UidNormalizerContextBuilder.php
      │  │  │  └─ UnwrappingDenormalizerContextBuilder.php
      │  │  └─ SerializerContextBuilder.php
      │  ├─ DataCollector
      │  │  └─ SerializerDataCollector.php
      │  ├─ Debug
      │  │  ├─ TraceableEncoder.php
      │  │  ├─ TraceableNormalizer.php
      │  │  └─ TraceableSerializer.php
      │  ├─ DependencyInjection
      │  │  └─ SerializerPass.php
      │  ├─ Encoder
      │  │  ├─ ChainDecoder.php
      │  │  ├─ ChainEncoder.php
      │  │  ├─ ContextAwareDecoderInterface.php
      │  │  ├─ ContextAwareEncoderInterface.php
      │  │  ├─ CsvEncoder.php
      │  │  ├─ DecoderInterface.php
      │  │  ├─ EncoderInterface.php
      │  │  ├─ JsonDecode.php
      │  │  ├─ JsonEncode.php
      │  │  ├─ JsonEncoder.php
      │  │  ├─ NormalizationAwareInterface.php
      │  │  ├─ XmlEncoder.php
      │  │  └─ YamlEncoder.php
      │  ├─ Exception
      │  │  ├─ BadMethodCallException.php
      │  │  ├─ CircularReferenceException.php
      │  │  ├─ ExceptionInterface.php
      │  │  ├─ ExtraAttributesException.php
      │  │  ├─ InvalidArgumentException.php
      │  │  ├─ LogicException.php
      │  │  ├─ MappingException.php
      │  │  ├─ MissingConstructorArgumentsException.php
      │  │  ├─ NotEncodableValueException.php
      │  │  ├─ NotNormalizableValueException.php
      │  │  ├─ PartialDenormalizationException.php
      │  │  ├─ RuntimeException.php
      │  │  ├─ UnexpectedValueException.php
      │  │  ├─ UnsupportedException.php
      │  │  └─ UnsupportedFormatException.php
      │  ├─ Extractor
      │  │  ├─ ObjectPropertyListExtractor.php
      │  │  └─ ObjectPropertyListExtractorInterface.php
      │  ├─ LICENSE
      │  ├─ Mapping
      │  │  ├─ AttributeMetadata.php
      │  │  ├─ AttributeMetadataInterface.php
      │  │  ├─ ClassDiscriminatorFromClassMetadata.php
      │  │  ├─ ClassDiscriminatorMapping.php
      │  │  ├─ ClassDiscriminatorResolverInterface.php
      │  │  ├─ ClassMetadata.php
      │  │  ├─ ClassMetadataInterface.php
      │  │  ├─ Factory
      │  │  │  ├─ CacheClassMetadataFactory.php
      │  │  │  ├─ ClassMetadataFactory.php
      │  │  │  ├─ ClassMetadataFactoryCompiler.php
      │  │  │  ├─ ClassMetadataFactoryInterface.php
      │  │  │  ├─ ClassResolverTrait.php
      │  │  │  └─ CompiledClassMetadataFactory.php
      │  │  └─ Loader
      │  │     ├─ AnnotationLoader.php
      │  │     ├─ AttributeLoader.php
      │  │     ├─ FileLoader.php
      │  │     ├─ LoaderChain.php
      │  │     ├─ LoaderInterface.php
      │  │     ├─ schema
      │  │     │  └─ dic
      │  │     │     └─ serializer-mapping
      │  │     │        └─ serializer-mapping-1.0.xsd
      │  │     ├─ XmlFileLoader.php
      │  │     └─ YamlFileLoader.php
      │  ├─ NameConverter
      │  │  ├─ AdvancedNameConverterInterface.php
      │  │  ├─ CamelCaseToSnakeCaseNameConverter.php
      │  │  ├─ MetadataAwareNameConverter.php
      │  │  └─ NameConverterInterface.php
      │  ├─ Normalizer
      │  │  ├─ AbstractNormalizer.php
      │  │  ├─ AbstractObjectNormalizer.php
      │  │  ├─ ArrayDenormalizer.php
      │  │  ├─ BackedEnumNormalizer.php
      │  │  ├─ CacheableSupportsMethodInterface.php
      │  │  ├─ ConstraintViolationListNormalizer.php
      │  │  ├─ ContextAwareDenormalizerInterface.php
      │  │  ├─ ContextAwareNormalizerInterface.php
      │  │  ├─ CustomNormalizer.php
      │  │  ├─ DataUriNormalizer.php
      │  │  ├─ DateIntervalNormalizer.php
      │  │  ├─ DateTimeNormalizer.php
      │  │  ├─ DateTimeZoneNormalizer.php
      │  │  ├─ DenormalizableInterface.php
      │  │  ├─ DenormalizerAwareInterface.php
      │  │  ├─ DenormalizerAwareTrait.php
      │  │  ├─ DenormalizerInterface.php
      │  │  ├─ FormErrorNormalizer.php
      │  │  ├─ GetSetMethodNormalizer.php
      │  │  ├─ JsonSerializableNormalizer.php
      │  │  ├─ MimeMessageNormalizer.php
      │  │  ├─ NormalizableInterface.php
      │  │  ├─ NormalizerAwareInterface.php
      │  │  ├─ NormalizerAwareTrait.php
      │  │  ├─ NormalizerInterface.php
      │  │  ├─ ObjectNormalizer.php
      │  │  ├─ ObjectToPopulateTrait.php
      │  │  ├─ ProblemNormalizer.php
      │  │  ├─ PropertyNormalizer.php
      │  │  ├─ TranslatableNormalizer.php
      │  │  ├─ UidNormalizer.php
      │  │  └─ UnwrappingDenormalizer.php
      │  ├─ README.md
      │  ├─ Serializer.php
      │  ├─ SerializerAwareInterface.php
      │  ├─ SerializerAwareTrait.php
      │  └─ SerializerInterface.php
      └─ yaml
         ├─ CHANGELOG.md
         ├─ Command
         │  └─ LintCommand.php
         ├─ composer.json
         ├─ Dumper.php
         ├─ Escaper.php
         ├─ Exception
         │  ├─ DumpException.php
         │  ├─ ExceptionInterface.php
         │  ├─ ParseException.php
         │  └─ RuntimeException.php
         ├─ Inline.php
         ├─ LICENSE
         ├─ Parser.php
         ├─ README.md
         ├─ Resources
         │  └─ bin
         │     └─ yaml-lint
         ├─ Tag
         │  └─ TaggedValue.php
         ├─ Unescaper.php
         └─ Yaml.php

```
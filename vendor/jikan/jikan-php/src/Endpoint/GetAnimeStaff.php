<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Endpoint;

use Jikan\JikanPHP\Exception\GetAnimeStaffBadRequestException;
use Jikan\JikanPHP\Model\AnimeStaff;
use Jikan\JikanPHP\Runtime\Client\BaseEndpoint;
use Jikan\JikanPHP\Runtime\Client\Endpoint;
use Jikan\JikanPHP\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class GetAnimeStaff extends BaseEndpoint implements Endpoint
{
    public function __construct(protected int $id)
    {
    }

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/anime/{id}/staff');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetAnimeStaffBadRequestException
     *
     * @return null|AnimeStaff
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (!is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, AnimeStaff::class, 'json');
        }

        if (400 === $status) {
            throw new GetAnimeStaffBadRequestException();
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}

<?php

namespace DedexBundle\Entity\Ern381;

use DedexBundle\Entity\Ern381\PurgeReleaseMessage\PurgeReleaseMessageAnonymousPHPType;

/**
 * Class representing PurgeReleaseMessage
 *
 * A Message in the Release Notification Message Suite Standard, allowing a ReleaseCreator to 'purge' a Release that a DSP has on its books but that cannot be retracted or be taken down in the normal way (e.g. because its metadata is corrupt).
 */
class PurgeReleaseMessage extends PurgeReleaseMessageAnonymousPHPType
{
}


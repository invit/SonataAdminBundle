<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Admin;

@trigger_error(sprintf(
    'The %1$s\AdminExtension class is deprecated since version 3.1 and will be removed in 4.0.'
    .' Use %1$s\AbstractAdminExtension instead.',
    __NAMESPACE__
), E_USER_DEPRECATED);

/**
 * NEXT_MAJOR: remove this class.
 *
 * @deprecated since sonata-project/admin-bundle 3.1, to be removed in 4.0. Use Sonata\AdminBundle\AbstractAdminExtension instead
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
abstract class AdminExtension extends AbstractAdminExtension
{
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* server/privileges/user_overview.twig */
class __TwigTemplate_b5f366cdeda48b04d9d4cb0781ac21de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
  <div class=\"col-12\">
    <h2>
      ";
        // line 4
        echo PhpMyAdmin\Html\Generator::getIcon("b_usrlist");
        echo "
      ";
echo _gettext("User accounts overview");
        // line 6
        echo "    </h2>
  </div>
</div>

";
        // line 10
        echo ($context["error_messages"] ?? null);
        echo "

";
        // line 12
        echo ($context["empty_user_notice"] ?? null);
        echo "

";
        // line 14
        echo ($context["initials"] ?? null);
        echo "

";
        // line 16
        if ( !twig_test_empty(($context["users_overview"] ?? null))) {
            // line 17
            echo "  ";
            echo ($context["users_overview"] ?? null);
            echo "
";
        } elseif (        // line 18
($context["is_createuser"] ?? null)) {
            // line 19
            echo "  <div class=\"row\">
    <div class=\"col-12\">
      <fieldset class=\"pma-fieldset\" id=\"fieldset_add_user\">
        <legend>";
echo _pgettext("Create new user", "New");
            // line 22
            echo "</legend>
        <a id=\"add_user_anchor\" href=\"";
            // line 23
            echo PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            echo "\">
          ";
            // line 24
            echo PhpMyAdmin\Html\Generator::getIcon("b_usradd", _gettext("Add user account"));
            echo "
        </a>
      </fieldset>
    </div>
  </div>
";
        }
        // line 30
        echo "
";
        // line 31
        echo ($context["flush_notice"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "server/privileges/user_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  99 => 30,  90 => 24,  86 => 23,  83 => 22,  77 => 19,  75 => 18,  70 => 17,  68 => 16,  63 => 14,  58 => 12,  53 => 10,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/user_overview.twig", "/Users/sayar/Desktop/WAD/2-php-app/phpMyadmin/templates/server/privileges/user_overview.twig");
    }
}

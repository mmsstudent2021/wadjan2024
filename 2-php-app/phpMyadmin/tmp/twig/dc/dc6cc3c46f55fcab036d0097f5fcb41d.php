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

/* server/privileges/add_user.twig */
class __TwigTemplate_4860fedec6c48c47f790679b45abf4bf extends Template
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
        echo "<h2>
  ";
        // line 2
        echo PhpMyAdmin\Html\Generator::getIcon("b_usradd");
        echo "
  ";
echo _gettext("Add user account");
        // line 4
        echo "</h2>

<form name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 6
        echo PhpMyAdmin\Url::getFromRoute("/server/privileges");
        echo "\" method=\"post\" autocomplete=\"off\">
  ";
        // line 7
        echo PhpMyAdmin\Url::getHiddenInputs();
        echo "

  ";
        // line 9
        echo ($context["login_information_fields_new"] ?? null);
        echo "

  <fieldset class=\"pma-fieldset\" id=\"fieldset_add_user_database\">
    <legend>";
echo _gettext("Database for user account");
        // line 12
        echo "</legend>

    <input type=\"checkbox\" name=\"createdb-1\" id=\"createdb-1\">
    <label for=\"createdb-1\">";
echo _gettext("Create database with same name and grant all privileges.");
        // line 15
        echo "</label>
    <br>

    <input type=\"checkbox\" name=\"createdb-2\" id=\"createdb-2\">
    <label for=\"createdb-2\">";
echo _gettext("Grant all privileges on wildcard name (username\\_%).");
        // line 19
        echo "</label>
    <br>

    ";
        // line 22
        if ( !twig_test_empty(($context["database"] ?? null))) {
            // line 23
            echo "      <input type=\"checkbox\" name=\"createdb-3\" id=\"createdb-3\" checked>
      <label for=\"createdb-3\">";
            // line 24
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Grant all privileges on database %s."), ($context["database"] ?? null)), "html", null, true);
            echo "</label>
      <input type=\"hidden\" name=\"dbname\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["database"] ?? null), "html", null, true);
            echo "\">
      <br>
    ";
        }
        // line 28
        echo "  </fieldset>

  ";
        // line 30
        if (($context["is_grant_user"] ?? null)) {
            // line 31
            echo "    ";
            echo ($context["privileges_table"] ?? null);
            echo "
  ";
        }
        // line 33
        echo "
  <fieldset id=\"fieldset_add_user_footer\" class=\"pma-fieldset tblFooters\">
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
echo _gettext("Go");
        // line 36
        echo "\">
  </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "server/privileges/add_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  110 => 33,  104 => 31,  102 => 30,  98 => 28,  92 => 25,  88 => 24,  85 => 23,  83 => 22,  78 => 19,  71 => 15,  65 => 12,  58 => 9,  53 => 7,  49 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/add_user.twig", "/Users/sayar/Desktop/WAD/2-php-app/phpMyadmin/templates/server/privileges/add_user.twig");
    }
}

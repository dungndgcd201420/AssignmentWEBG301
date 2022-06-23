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

/* products/show.html.twig */
class __TwigTemplate_91a77f67be0a9501e97e6cbd917290b7c501d15a2e87cdf103fd2e7535c7a866 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <table>
    <tbody>
    <tr>
      <th>ID of Album</th>
      <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>Album Name</th>
      <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>Artist</th>
      <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 16, $this->source); })()), "artist", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>Price of Album</th>
      <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>Quantity</th>
      <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["album"]) || array_key_exists("album", $context) ? $context["album"] : (function () { throw new RuntimeError('Variable "album" does not exist.', 24, $this->source); })()), "quantity", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
  </table>

  <ul>
    <li>
      <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("album_index");
        echo "\">Back to the list</a>
    </li>
  </ul>


 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "products/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 <table>
    <tbody>
    <tr>
      <th>ID of Album</th>
      <td>{{ album.id }}</td>
    </tr>
    <tr>
      <th>Album Name</th>
      <td>{{album.name }}</td>
    </tr>
    <tr>
      <th>Artist</th>
      <td>{{ album.artist }}</td>
    </tr>
    <tr>
      <th>Price of Album</th>
      <td>{{ album.price}}</td>
    </tr>
    <tr>
      <th>Quantity</th>
      <td>{{ album.quantity}}</td>
    </tr>
    </tbody>
  </table>

  <ul>
    <li>
      <a href=\"{{ path('album_index') }}\">Back to the list</a>
    </li>
  </ul>


 
{% endblock %}", "products/show.html.twig", "C:\\Users\\klysm\\AssignmentWEBG301\\templates\\products\\show.html.twig");
    }
}

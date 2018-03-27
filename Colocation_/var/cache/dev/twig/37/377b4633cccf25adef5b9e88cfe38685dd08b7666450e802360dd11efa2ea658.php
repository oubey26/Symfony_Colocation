<?php

/* annonces/seloger.html.twig */
class __TwigTemplate_510a5e1d5264b2cac16eeddb12378ffe9e9560de0b6826c6b3e4fedd045e70d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/seloger.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_152d76a9dfbf9e1833e67a6fdc380b30ecf7323ae355768b91cc0a7be97ab352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152d76a9dfbf9e1833e67a6fdc380b30ecf7323ae355768b91cc0a7be97ab352->enter($__internal_152d76a9dfbf9e1833e67a6fdc380b30ecf7323ae355768b91cc0a7be97ab352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/seloger.html.twig"));

        $__internal_680ec34e87f8b6149d180d960d02c8a7b7118bcfc2838624036cb0c5e679b051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680ec34e87f8b6149d180d960d02c8a7b7118bcfc2838624036cb0c5e679b051->enter($__internal_680ec34e87f8b6149d180d960d02c8a7b7118bcfc2838624036cb0c5e679b051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/seloger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152d76a9dfbf9e1833e67a6fdc380b30ecf7323ae355768b91cc0a7be97ab352->leave($__internal_152d76a9dfbf9e1833e67a6fdc380b30ecf7323ae355768b91cc0a7be97ab352_prof);

        
        $__internal_680ec34e87f8b6149d180d960d02c8a7b7118bcfc2838624036cb0c5e679b051->leave($__internal_680ec34e87f8b6149d180d960d02c8a7b7118bcfc2838624036cb0c5e679b051_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16feafa5228d615799ed2421876f7f99965db72878519035a1cc8083f3cb4935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16feafa5228d615799ed2421876f7f99965db72878519035a1cc8083f3cb4935->enter($__internal_16feafa5228d615799ed2421876f7f99965db72878519035a1cc8083f3cb4935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b58dc63f1355ed52ebe6e7693f3da39e2feccc53041b794a56f3b3317fd3c1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58dc63f1355ed52ebe6e7693f3da39e2feccc53041b794a56f3b3317fd3c1e4->enter($__internal_b58dc63f1355ed52ebe6e7693f3da39e2feccc53041b794a56f3b3317fd3c1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se déconnecter"), "html", null, true);
        echo " </a>
    <h1>Annonce</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <th>Nombredechambre</th></tr>
            <tr>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["annonce"] ?? $this->getContext($context, "annonce")), "nombreDeChambre", array()), "html", null, true);
        echo "</td>
                <p> Vos colocataires sont 
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coloc"] ?? $this->getContext($context, "coloc")));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 16
            echo "                    ";
            echo twig_escape_filter($this->env, $context["col"], "html", null, true);
            echo " , 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</p>
                    
            </tr>
        </tbody>
    </table>
            <p> Une chambre a été reservé</p>
    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
        </li>
    </ul>
";
        
        $__internal_b58dc63f1355ed52ebe6e7693f3da39e2feccc53041b794a56f3b3317fd3c1e4->leave($__internal_b58dc63f1355ed52ebe6e7693f3da39e2feccc53041b794a56f3b3317fd3c1e4_prof);

        
        $__internal_16feafa5228d615799ed2421876f7f99965db72878519035a1cc8083f3cb4935->leave($__internal_16feafa5228d615799ed2421876f7f99965db72878519035a1cc8083f3cb4935_prof);

    }

    public function getTemplateName()
    {
        return "annonces/seloger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  85 => 17,  76 => 16,  72 => 15,  67 => 13,  63 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <a href=\"{{ path('fos_user_security_logout') }}\"> {{'se déconnecter'|trans}} </a>
    <h1>Annonce</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <th>Nombredechambre</th></tr>
            <tr>
                <td>{{ annonce.id }}</td>
                <td>{{ annonce.nombreDeChambre }}</td>
                <p> Vos colocataires sont 
                {%for col in coloc %}
                    {{col}} , 
                {%endfor%}</p>
                    
            </tr>
        </tbody>
    </table>
            <p> Une chambre a été reservé</p>
    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
    </ul>
{% endblock %}", "annonces/seloger.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\seloger.html.twig");
    }
}

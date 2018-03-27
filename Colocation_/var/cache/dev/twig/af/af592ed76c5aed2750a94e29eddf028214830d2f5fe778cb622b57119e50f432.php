<?php

/* annonces/seloger.html.twig */
class __TwigTemplate_8e5b7849feb7239a76f7056ad29203f3a01de36b591e6117320bce6e1c5382cb extends Twig_Template
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
        $__internal_78f042dec224e14f4fa2515bd901080f267902020168dbee9576c9683d4d219d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f042dec224e14f4fa2515bd901080f267902020168dbee9576c9683d4d219d->enter($__internal_78f042dec224e14f4fa2515bd901080f267902020168dbee9576c9683d4d219d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/seloger.html.twig"));

        $__internal_1986c07419665f090a47eaca73146a7df2dd441b76b2342b743c9fd9ffaa5a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1986c07419665f090a47eaca73146a7df2dd441b76b2342b743c9fd9ffaa5a6f->enter($__internal_1986c07419665f090a47eaca73146a7df2dd441b76b2342b743c9fd9ffaa5a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/seloger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f042dec224e14f4fa2515bd901080f267902020168dbee9576c9683d4d219d->leave($__internal_78f042dec224e14f4fa2515bd901080f267902020168dbee9576c9683d4d219d_prof);

        
        $__internal_1986c07419665f090a47eaca73146a7df2dd441b76b2342b743c9fd9ffaa5a6f->leave($__internal_1986c07419665f090a47eaca73146a7df2dd441b76b2342b743c9fd9ffaa5a6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbcbf4b226934d12b72e276708b4b4a0ca799011812cfb1ebc6acfeeb40be8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcbf4b226934d12b72e276708b4b4a0ca799011812cfb1ebc6acfeeb40be8de->enter($__internal_bbcbf4b226934d12b72e276708b4b4a0ca799011812cfb1ebc6acfeeb40be8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbb93904b28156245fd318ff0698adca2c7edcce4b41ed930b0388812fe77b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb93904b28156245fd318ff0698adca2c7edcce4b41ed930b0388812fe77b3d->enter($__internal_cbb93904b28156245fd318ff0698adca2c7edcce4b41ed930b0388812fe77b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nombreDeChambre", array()), "html", null, true);
        echo "</td>
                <p> Vos colocataires sont 
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coloc"]) ? $context["coloc"] : $this->getContext($context, "coloc")));
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
        
        $__internal_cbb93904b28156245fd318ff0698adca2c7edcce4b41ed930b0388812fe77b3d->leave($__internal_cbb93904b28156245fd318ff0698adca2c7edcce4b41ed930b0388812fe77b3d_prof);

        
        $__internal_bbcbf4b226934d12b72e276708b4b4a0ca799011812cfb1ebc6acfeeb40be8de->leave($__internal_bbcbf4b226934d12b72e276708b4b4a0ca799011812cfb1ebc6acfeeb40be8de_prof);

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

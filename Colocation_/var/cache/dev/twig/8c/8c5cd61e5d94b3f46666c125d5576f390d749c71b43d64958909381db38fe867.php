<?php

/* :annonces:seloger.html.twig */
class __TwigTemplate_ad46849486bad1921519981b6e85916050af1f5aabb5cd8bc4a5b81eeda390f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":annonces:seloger.html.twig", 1);
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
        $__internal_7dc8bf88eddaa8038bee73687dc785d60418426aa6534b8f78481b883fb8d2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc8bf88eddaa8038bee73687dc785d60418426aa6534b8f78481b883fb8d2d3->enter($__internal_7dc8bf88eddaa8038bee73687dc785d60418426aa6534b8f78481b883fb8d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:seloger.html.twig"));

        $__internal_2564a9436e454323107120f03f2bb6eff0095d1e7120beb14f05903ac5e137a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2564a9436e454323107120f03f2bb6eff0095d1e7120beb14f05903ac5e137a7->enter($__internal_2564a9436e454323107120f03f2bb6eff0095d1e7120beb14f05903ac5e137a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:seloger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc8bf88eddaa8038bee73687dc785d60418426aa6534b8f78481b883fb8d2d3->leave($__internal_7dc8bf88eddaa8038bee73687dc785d60418426aa6534b8f78481b883fb8d2d3_prof);

        
        $__internal_2564a9436e454323107120f03f2bb6eff0095d1e7120beb14f05903ac5e137a7->leave($__internal_2564a9436e454323107120f03f2bb6eff0095d1e7120beb14f05903ac5e137a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0b425fcd3236c837a0bfe6ca709d5dc6199f57d0e7d528962ae21125d5776a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0b425fcd3236c837a0bfe6ca709d5dc6199f57d0e7d528962ae21125d5776a->enter($__internal_cc0b425fcd3236c837a0bfe6ca709d5dc6199f57d0e7d528962ae21125d5776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05d7c9881a3f2591ea00d323f74068a0c95e0b8c97f2a7f8713790fc8cba3e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d7c9881a3f2591ea00d323f74068a0c95e0b8c97f2a7f8713790fc8cba3e1b->enter($__internal_05d7c9881a3f2591ea00d323f74068a0c95e0b8c97f2a7f8713790fc8cba3e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_05d7c9881a3f2591ea00d323f74068a0c95e0b8c97f2a7f8713790fc8cba3e1b->leave($__internal_05d7c9881a3f2591ea00d323f74068a0c95e0b8c97f2a7f8713790fc8cba3e1b_prof);

        
        $__internal_cc0b425fcd3236c837a0bfe6ca709d5dc6199f57d0e7d528962ae21125d5776a->leave($__internal_cc0b425fcd3236c837a0bfe6ca709d5dc6199f57d0e7d528962ae21125d5776a_prof);

    }

    public function getTemplateName()
    {
        return ":annonces:seloger.html.twig";
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
{% endblock %}", ":annonces:seloger.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/annonces/seloger.html.twig");
    }
}

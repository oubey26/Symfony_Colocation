<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a9be50cdc46e5418f5d737205b31181fcb5021397d07aade0c7237e855fa2983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b26082daf34166fcddcafc9f51a191de947dfee0919370fdd5e035f7ee8ffa84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26082daf34166fcddcafc9f51a191de947dfee0919370fdd5e035f7ee8ffa84->enter($__internal_b26082daf34166fcddcafc9f51a191de947dfee0919370fdd5e035f7ee8ffa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4cbe64bbfad158a4da4a62ed4e7beb772db71a9c352b56864c8f70c02c8ecbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbe64bbfad158a4da4a62ed4e7beb772db71a9c352b56864c8f70c02c8ecbde->enter($__internal_4cbe64bbfad158a4da4a62ed4e7beb772db71a9c352b56864c8f70c02c8ecbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b26082daf34166fcddcafc9f51a191de947dfee0919370fdd5e035f7ee8ffa84->leave($__internal_b26082daf34166fcddcafc9f51a191de947dfee0919370fdd5e035f7ee8ffa84_prof);

        
        $__internal_4cbe64bbfad158a4da4a62ed4e7beb772db71a9c352b56864c8f70c02c8ecbde->leave($__internal_4cbe64bbfad158a4da4a62ed4e7beb772db71a9c352b56864c8f70c02c8ecbde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab3d2d7a50a55bb5c5afe0109e7045a2159fd065ba29e5f842855c53b9afc103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3d2d7a50a55bb5c5afe0109e7045a2159fd065ba29e5f842855c53b9afc103->enter($__internal_ab3d2d7a50a55bb5c5afe0109e7045a2159fd065ba29e5f842855c53b9afc103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_133bd335ea08405badaddfa5b392616a2eca6c2fa2e5a3dcd3c692f204c7f3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133bd335ea08405badaddfa5b392616a2eca6c2fa2e5a3dcd3c692f204c7f3cc->enter($__internal_133bd335ea08405badaddfa5b392616a2eca6c2fa2e5a3dcd3c692f204c7f3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_133bd335ea08405badaddfa5b392616a2eca6c2fa2e5a3dcd3c692f204c7f3cc->leave($__internal_133bd335ea08405badaddfa5b392616a2eca6c2fa2e5a3dcd3c692f204c7f3cc_prof);

        
        $__internal_ab3d2d7a50a55bb5c5afe0109e7045a2159fd065ba29e5f842855c53b9afc103->leave($__internal_ab3d2d7a50a55bb5c5afe0109e7045a2159fd065ba29e5f842855c53b9afc103_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76c4f7d2a721033ac7ce68d92723cc2ba61a9da1027c73c2f2f3c2aa88c82fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c4f7d2a721033ac7ce68d92723cc2ba61a9da1027c73c2f2f3c2aa88c82fc2->enter($__internal_76c4f7d2a721033ac7ce68d92723cc2ba61a9da1027c73c2f2f3c2aa88c82fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8cbc3ed3970f874b71a6dc97d8e3d3b170c6db7890e6bdbae28b5fd07cd4b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cbc3ed3970f874b71a6dc97d8e3d3b170c6db7890e6bdbae28b5fd07cd4b8a->enter($__internal_e8cbc3ed3970f874b71a6dc97d8e3d3b170c6db7890e6bdbae28b5fd07cd4b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8cbc3ed3970f874b71a6dc97d8e3d3b170c6db7890e6bdbae28b5fd07cd4b8a->leave($__internal_e8cbc3ed3970f874b71a6dc97d8e3d3b170c6db7890e6bdbae28b5fd07cd4b8a_prof);

        
        $__internal_76c4f7d2a721033ac7ce68d92723cc2ba61a9da1027c73c2f2f3c2aa88c82fc2->leave($__internal_76c4f7d2a721033ac7ce68d92723cc2ba61a9da1027c73c2f2f3c2aa88c82fc2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_542f3e50bfb2f7aae81f791b5367e3fc9133361470d882103b3635fb98debcb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542f3e50bfb2f7aae81f791b5367e3fc9133361470d882103b3635fb98debcb1->enter($__internal_542f3e50bfb2f7aae81f791b5367e3fc9133361470d882103b3635fb98debcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b40053ab232f8015c0dc893e5e3decd156c7cd01c14b9a7e6e6ff573b69902d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b40053ab232f8015c0dc893e5e3decd156c7cd01c14b9a7e6e6ff573b69902d->enter($__internal_2b40053ab232f8015c0dc893e5e3decd156c7cd01c14b9a7e6e6ff573b69902d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b40053ab232f8015c0dc893e5e3decd156c7cd01c14b9a7e6e6ff573b69902d->leave($__internal_2b40053ab232f8015c0dc893e5e3decd156c7cd01c14b9a7e6e6ff573b69902d_prof);

        
        $__internal_542f3e50bfb2f7aae81f791b5367e3fc9133361470d882103b3635fb98debcb1->leave($__internal_542f3e50bfb2f7aae81f791b5367e3fc9133361470d882103b3635fb98debcb1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

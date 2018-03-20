<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_390e08145619a699ecfeacd53ed96b1ae6e7a2e2c80f33b9e1f1313a12b10357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390e08145619a699ecfeacd53ed96b1ae6e7a2e2c80f33b9e1f1313a12b10357->enter($__internal_390e08145619a699ecfeacd53ed96b1ae6e7a2e2c80f33b9e1f1313a12b10357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_245d2ab292fd07578b6bc737ec0dc4b565e517f071baa817de4463f2e60576b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245d2ab292fd07578b6bc737ec0dc4b565e517f071baa817de4463f2e60576b7->enter($__internal_245d2ab292fd07578b6bc737ec0dc4b565e517f071baa817de4463f2e60576b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_390e08145619a699ecfeacd53ed96b1ae6e7a2e2c80f33b9e1f1313a12b10357->leave($__internal_390e08145619a699ecfeacd53ed96b1ae6e7a2e2c80f33b9e1f1313a12b10357_prof);

        
        $__internal_245d2ab292fd07578b6bc737ec0dc4b565e517f071baa817de4463f2e60576b7->leave($__internal_245d2ab292fd07578b6bc737ec0dc4b565e517f071baa817de4463f2e60576b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc031d4e21887eaa06879a3ac6f4b1e8f31db4bc0f0976daeba21e0a508df83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc031d4e21887eaa06879a3ac6f4b1e8f31db4bc0f0976daeba21e0a508df83a->enter($__internal_cc031d4e21887eaa06879a3ac6f4b1e8f31db4bc0f0976daeba21e0a508df83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04e1d5e61f120dc7f20c74288c900662cf4c754988eb2384e72ca4e6bafd372f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e1d5e61f120dc7f20c74288c900662cf4c754988eb2384e72ca4e6bafd372f->enter($__internal_04e1d5e61f120dc7f20c74288c900662cf4c754988eb2384e72ca4e6bafd372f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04e1d5e61f120dc7f20c74288c900662cf4c754988eb2384e72ca4e6bafd372f->leave($__internal_04e1d5e61f120dc7f20c74288c900662cf4c754988eb2384e72ca4e6bafd372f_prof);

        
        $__internal_cc031d4e21887eaa06879a3ac6f4b1e8f31db4bc0f0976daeba21e0a508df83a->leave($__internal_cc031d4e21887eaa06879a3ac6f4b1e8f31db4bc0f0976daeba21e0a508df83a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_064d8551c53dbe5e1d7627e07fd5a6e039f94fb2fa6b9615c00cea7499e7c7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064d8551c53dbe5e1d7627e07fd5a6e039f94fb2fa6b9615c00cea7499e7c7e9->enter($__internal_064d8551c53dbe5e1d7627e07fd5a6e039f94fb2fa6b9615c00cea7499e7c7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68ef7d3aac32d1f0f260a68d06d8c0d244b562a78be066da1390d16d8abb186e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ef7d3aac32d1f0f260a68d06d8c0d244b562a78be066da1390d16d8abb186e->enter($__internal_68ef7d3aac32d1f0f260a68d06d8c0d244b562a78be066da1390d16d8abb186e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68ef7d3aac32d1f0f260a68d06d8c0d244b562a78be066da1390d16d8abb186e->leave($__internal_68ef7d3aac32d1f0f260a68d06d8c0d244b562a78be066da1390d16d8abb186e_prof);

        
        $__internal_064d8551c53dbe5e1d7627e07fd5a6e039f94fb2fa6b9615c00cea7499e7c7e9->leave($__internal_064d8551c53dbe5e1d7627e07fd5a6e039f94fb2fa6b9615c00cea7499e7c7e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49069944e1b03fbe3c6364963004b9de71bcf68811e11cc4b143dac87f9ae600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49069944e1b03fbe3c6364963004b9de71bcf68811e11cc4b143dac87f9ae600->enter($__internal_49069944e1b03fbe3c6364963004b9de71bcf68811e11cc4b143dac87f9ae600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56674f7f98add248e963ba8084899542282e1e5a5bbe793e98af10a7a0cd99b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56674f7f98add248e963ba8084899542282e1e5a5bbe793e98af10a7a0cd99b9->enter($__internal_56674f7f98add248e963ba8084899542282e1e5a5bbe793e98af10a7a0cd99b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56674f7f98add248e963ba8084899542282e1e5a5bbe793e98af10a7a0cd99b9->leave($__internal_56674f7f98add248e963ba8084899542282e1e5a5bbe793e98af10a7a0cd99b9_prof);

        
        $__internal_49069944e1b03fbe3c6364963004b9de71bcf68811e11cc4b143dac87f9ae600->leave($__internal_49069944e1b03fbe3c6364963004b9de71bcf68811e11cc4b143dac87f9ae600_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\colocation_test\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
